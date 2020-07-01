@extends('user_views.template.loginregister')

@section('title', 'Register')

@section('content')
				<form method="post" action="{{url('user/register/auth')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    {{ csrf_field() }}

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

					<span class="login100-form-title">
						Register
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon masukkan nama depan">
						<input class="input100" type="text" name="nama_depan" placeholder="Nama depan">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon masukkan nama belakang">
						<input class="input100" type="text" name="nama_belakang" placeholder="Nama belakang">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Mohon masukkan email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon masukkan password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Mohon masukkan ulang password">
						<input class="input100" type="password" name="konfirmasi_password" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Register
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Sudah punya akun?
						</span>

						<a href="{{url('user/login')}}" class="txt3">
							Sign in
						</a>
					</div>
				</form>
@endsection
