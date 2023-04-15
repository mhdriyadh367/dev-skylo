@extends('layouts.guest')
@section('content')
    <div id="auth-left">

        <h1 class="auth-title">Masuk</h1>
        <p class="auth-subtitle mb-5">Masuk dengan data akun kamu yang telah terdaftar</p>
        <form action="#" method="POST">
            @csrf
            <div class="form-group position-relative has-icon-left mb-4">
                <input class="form-control form-control-md text-white" type="email" name="email"
                    placeholder="Username / Email" value="{{ old('email') }}">
                <div class="form-control-icon">
                    <i class="bi bi-person"></i>
                </div>
            </div>
            <div class="form-group position-relative has-icon-left mb-4">
                <input type="password" class="form-control form-control-md text-white" name="password"
                    placeholder="Password">
                <div class="form-control-icon">
                    <i class="bi bi-shield-lock"></i>
                </div>
            </div>
            <div class="form-check form-check-lg d-flex justify-content-end align-items-end">
               
                    <p><a class="font-bold text-decoration-none" href="{{route('forgot-password')}}"
                            style="font-weight: 700;
                font-size: 18px;
                line-height: 25px;">Lupa
                            Password</a></p>
               

            </div>
            <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Masuk</button>
        </form>
        <div class="text-center mt-5 text-lg fs-4">
           
                <p class="not-register text-gray-600">Belum punya akun?<a href="{{ route('register') }}"
                        class="font-bold text-decoration-none"> Daftar Sekarang</a></p>
           
        </div>
    </div>
@stop
