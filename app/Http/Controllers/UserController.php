<?php

namespace App\Http\Controllers;

use App\User;
use App\ApiKey;
use App\Http\Controllers\KeyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function profileIndex()
    {
        if (!Session::get('login')) {
            return redirect('user/login')->with('alert','Silahkan login terlebih dahulu');
        } else {
            $this->updateKeyStatus();

            if (Session::get('apikey-req-success')){
                $keys = new KeyController();

                $key = $keys->getKey(Session::get('email'));
            } else {
                $key = ApiKey::where('id_user', Session::get('id_user'))
                ->where('valid', 1)
                ->first();

                if (!$key){
                    $key['api_key'] = "Tidak ada API key yang valid. Silahkan buat API key baru.";
                    $key['dibuat_pada'] = "-";
                    $key['expire_pada'] = "-";
                }
            }

            return view('user_views.profile', $key);
        }
    }

    public function changePasswordIndex()
    {
        if (!Session::get('login')) {
            return redirect('user/login')->with('alert','Silahkan login terlebih dahulu');
        } else {
            return view('user_views.changepassword');
        }
    }

    public function loginIndex()
    {
        return view('user_views.login');
    }

    public function registerIndex()
    {
        return view('user_views.register');
    }

    public function loginProcess(Request $request)
    {

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email', $email)->first();

        if ($data) {
            if (Hash::check($password, $data->password)) {
                Session::put('id_user', $data->id_user);
                Session::put('nama_lengkap', $data->nama_depan." ".$data->nama_belakang);
                Session::put('email', $data->email);
                Session::put('tanggal_daftar', $data->tanggal_daftar);
                Session::put('login', true);

                return redirect('user/profile');
            } else {
                return redirect('user/login')->with('alert','Email atau password tidak valid');
            }
        } else {
            return redirect('user/login')->with('alert','Email atau password tidak valid');
        }
    }

    public function registerProcess(Request $request)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:4',
            'nama_belakang' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'konfirmasi_password' => 'required|same:password',
        ]);

        $data = new User();
        $data->nama_depan = $request->nama_depan;
        $data->nama_belakang = $request->nama_belakang;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->tanggal_daftar = date("Y-m-d H:i:s");
        $data->save();
        return redirect('user/login')->with('alert-success','Registrasi berhasil, silahkan login');
    }

    public function logoutProcess()
    {
        Session::flush();
        return redirect('user/login')->with('alert-success','Anda telah logout');
    }

    public function generateNewApiProcess()
    {
        if (!Session::get('login')) {
            return redirect('user/login')->with('alert','Silahkan login terlebih dahulu');
        } else {
            $this->updateKeyStatus();

            $key = ApiKey::where('id_user', Session::get('id_user'))
            ->where('valid', 1)
            ->first();

            if (!$key){
                return redirect('user/profile')->with('apikey-req-success', true);
            } else {
                return redirect('user/profile')->with('alert-apikey', 'Gagal membuat API key baru. Silahkan membuat API key baru setelah API key lama telah expired');
            }
        }
    }

    private function updateKeyStatus()
    {
        $now = date("Y-m-d H:i:s");
        ApiKey::where('expire_pada', '<' , $now)
        ->update(['valid' => 0]);
    }
}
