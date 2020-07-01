<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\ApiKey;

class KeyController extends Controller
{
    public function getIndex()
    {
        $error['code'] = "400 - Bad Method Request";
        $error['message'] = "Silahkan melakukan request menggunakan method post untuk menggunakan endpoint ini";
        return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
    }

    public function postIndex()
    {
        $this->updateKeyStatus();

        $error_code = array("Missing Parameter", "Valid");
        $error_message = array(
            "Parameter yang diperlukan tidak diatur. Silahkan atur parameter berikut dan coba lagi: email, password",
            "Email atau password tidak valid. Silahkan coba lagi"
        );

        $data['email'] = "";
        $data['result'] = "";

        if (isset($_POST['email']) && isset($_POST['password'])){
            if ($_POST['email'] != '' || $_POST['password'] != ''){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $isUserValid = $this->isUserValid($email, $password);

                if ($isUserValid){
                    $data['email'] = $email;
                    $data['result'] = $this->getKey($email);
                } else {
                    $error['code'] = "200 - ".$error_code[1];
                    $error['message'] = $error_message[1];
                    return response(view('error_views.errors', $error), 200, ['Content-Type' => 'application/json']);
                }

            } else {
                $error['code'] = "400 - ".$error_code[0];
                $error['message'] = $error_message[0];
                return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
            }
        } else {
            $error['code'] = "400 - ".$error_code[0];
            $error['message'] = $error_message[0];
            return response(view('error_views.errors', $error), 400, ['Content-Type' => 'application/json']);
        }

        return response(view('keyresponse', $data), 200, ['Content-Type' => 'application/json']);
    }

    private function isUserValid($email, $password)
    {
        $results = User::where('email', $email)->get();

        if ($results)
        {
            if ($results[0]->email == $email && Hash::check($password, $results[0]->password)) {
                return true;
            }
        }

        return false;
    }

    public function getKey($email)
    {
        $id_user = User::select('id_user')
        ->where('email', $email)
        ->get();

        $id_user = $id_user[0]['id_user'];

        $numApiKeyExist = ApiKey::where('id_user', $id_user)
        ->where('valid', 1)
        ->count();

        $key = "";

        if ($numApiKeyExist > 0){
            $key = ApiKey::select('api_key', 'dibuat_pada', 'expire_pada')
            ->where('id_user', $id_user)
            ->where('valid', 1)
            ->get();

            $key = $key[0];

        } else {

            $random_int = mt_rand();
            $dibuat_pada = date("Y-m-d H:i:s");
            $expire_pada = date('Y-m-d H:i:s', strtotime("+2 hours"));

            $keys = new ApiKey();
            $keys->id_user = $id_user;
            $keys->api_key = md5($random_int.$email);
            $keys->dibuat_pada = $dibuat_pada;
            $keys->expire_pada = $expire_pada;
            $keys->save();

            $key = array(
                "api_key" => md5($random_int.$email),
                "dibuat_pada" => $dibuat_pada,
                "expire_pada" => $expire_pada
            );
        }

        return $key;
    }

    private function updateKeyStatus()
    {
        $now = date("Y-m-d H:i:s");
        ApiKey::where('expire_pada', '<' , $now)
        ->update(['valid' => 0]);
    }
}
