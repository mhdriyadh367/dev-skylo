@extends('layouts.guest')
@section('content')

<div id="auth-left">
    <a href="{{ route('login') }}" class="text-decoration-none text-secondary"><i class="bi bi-arrow-left fs-1"></i></a>
    <h1 class="auth-title">Lupa Password</h1>
    <p class="auth-subtitle mb-5">Masukkan email terdaftar</p>

    <form action="#" method="POST">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" placeholder="Username / Email" value="{{ old('email') }}" name="email">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-3">Kirim</button>
    </form>
   
</div>
@stop