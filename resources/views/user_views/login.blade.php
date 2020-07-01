@extends('user_views.template.loginregister')

@section('title', 'Login')

@section('content')
                <form method="post" action="{{url('user/login/auth')}}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                    {{ csrf_field() }}

                    @if(Session::has('alert'))
                    <div class="alert alert-danger">
                        {{Session::get('alert')}}
                    </div>
                    @endif

                    @if(Session::has('alert-success'))
					<div class="alert alert-success">
                        {{Session::get('alert-success')}}
                    </div>
                    @endif

					<span class="login100-form-title">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Lupa
						</span>

						<a href="#" class="txt2">
							Password?
						</a>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign in
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Tidak memiliki akun?
						</span>

						<a href="{{url('user/register')}}" class="txt3">
							Daftar sekarang
						</a>
					</div>
				</form>
@endsection
