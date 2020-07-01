@extends('user_views.template.userprofile')

@section('title', 'Profile')

@section('content')
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="{{url('assets/profile/assets/img/user.png')}}" alt="Gambar Profil User" /><!-- Masthead Heading-->
                <h1 class="masthead-heading mb-0">{{Session::get('nama_lengkap')}}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-dark">
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">{{Session::get('email')}}</p>
                <p class="masthead-subheading font-weight-light mt-1 mb-0"><small>Terdaftar pada : {{Session::get('tanggal_daftar')}}</small></p>

                <table class="mt-3">
                    <tbody>
                        @if(Session::has('alert-apikey'))
                        <tr>
                            <td colspan="2" class="py-3">
                                <div class="alert alert-danger">
                                    {{Session::get('alert-apikey')}}
                                </div>
                            </td>
                        </tr>
                        @endif
                        <tr class="tb-api-border">
                            <th class="tb-api-border theme-bg-light px-5 py-2">API key</th>
                            <td class="px-5 py-2">{{$api_key}}</td>
                        </tr>
                        <tr class="tb-api-border">
                            <th class="tb-api-border theme-bg-light px-5 py-2">Dibuat pada</th>
                            <td class="px-5 py-2">{{$dibuat_pada}}</td>
                        </tr>
                        <tr class="tb-api-border">
                            <th class="tb-api-border theme-bg-light px-5 py-2">Expire pada</th>
                            <td class="px-5 py-2">{{$expire_pada}}</td>
                        </tr>
                        <tr class="tb-api-border">
                            <td colspan="2" class="py-3"><a href="{{url('user/profile/key')}}" class="btn btn-success">Buat API key baru</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
@endsection
