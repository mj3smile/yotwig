@extends('user_views.template.userprofile')

@section('title', 'Ganti Password')

@section('content')
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <form method="post" action="{{url('user/profile/change-password/auth')}}">
                        <div class="form-group row justify-content-center text-left">
                            <label for="formPasswordLama" class="col-sm-3 col-form-label col-form-label-lg">Password lama</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-lg" name="password_lama" id="formPasswordLama" placeholder="Masukkan password lama">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center text-left">
                            <label for="formPasswordBaru" class="col-sm-3 col-form-label col-form-label-lg">Password baru</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-lg" name="password_baru" id="formPasswordBaru" placeholder="Masukkan password baru">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center text-left">
                            <label for="formKonfirmasiPasswordBaru" class="col-sm-3 col-form-label col-form-label-lg">Konfirmasi Password</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control form-control-lg" name="konfirmasi_password" id="formKonfirmasiPasswordBaru" placeholder="Konfirmasi Password Baru">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mt-4">Ganti Password</button>
                    </form>
                </div>
            </div>
@endsection
