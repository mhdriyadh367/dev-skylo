@extends('layouts.guest')
@section('content')

<div id="auth-left">

    <h1 class="auth-title">Daftar</h1>
    <p class="auth-subtitle mb-5">Lengkapi data berikut untuk daftar</p>

    <form action="" method="POST">
        @csrf
        <div class="text-white mb-2">Personal</div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="name" placeholder="Nama">
            <div class="form-control-icon">
                <i class="bi bi-person-badge"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Nomor HP" placeholder="Nomor HP">
            <div class="form-control-icon">
                <i class="bi bi-telephone"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Kode Referral"
                placeholder="Kode Referral">
            <div class="form-control-icon">
                <i class="bi bi-gift"></i>
            </div>
        </div>
        <div class="text-white mb-2">Foto Wajah</div>
        <div class="d-flex justify-content-center align-items-center position-relative"
            style="width: 133px; height: 133px; border-radius: 100%; background: #3B3B4B;">
            <div class="fs-1">
                <i class="bi bi-person" style="color: #818199;"></i>
            </div>
            <div class="position-absolute" style="right: 0; bottom: 0;">
                <div class="d-flex justify-content-center align-items-center"
                    style="width: 48px;
            height: 48px;
            background: #435EBE; border-radius: 100%;">
                    <div>
                        <i class="bi bi-pencil fs-5 text-white"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-white mt-3 mb-2">Foto KTP</div>
        <div class="d-flex justify-content-center align-items-center"
            style="width: 398px;
        height: 64px;
        background: #FFFFFF;
        border: 1px solid #35354F;
        border-radius: 8px;">
            <div
                style="font-weight: 400;
        font-size: 15px;
        line-height: 20px;
        text-align: center;
        color: #9899AA;">
                Drag & Drop your files here or Browse</div>
        </div>

        <div class="form-group position-relative has-icon-left mt-4 mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Nomor KTP" placeholder="Nomor KTP">
            <div class="form-control-icon">
                <i class="bi bi-person-lines-fill"></i>
            </div>
        </div>

        <div class="text-white mt-3 mb-2">Alamat</div>

        <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">
            
            <select class="form-select form-control form-control-md " style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; "
                id="basicSelect">
                <option>Pilih Provinsi</option>
                <option>Pilih Provinsi</option>
                <option>Pilih Provinsi</option>
            </select>
            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
        </fieldset>

        <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">
           
            <select class="form-select form-control form-control-md " style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; "
                id="basicSelect">
                <option>Pilih Kota / Kabupaten</option>
               
            </select>
            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
        </fieldset>

        <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">
          
            <select class="form-select form-control form-control-md " style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; "
                id="basicSelect">
               
                <option>Pilih Kecamatan</option>
            </select>

            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
            
        </fieldset>

        <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">
           
            <select class="form-select form-control form-control-md " style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; "
                id="basicSelect">
               
                <option>Pilih Kelurahan</option>
            </select>
            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
        </fieldset>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Kode Pos"
                placeholder="Kode Pos">
            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Detail Alamat"
                placeholder="Detail Alamat">
            <div class="form-control-icon">
                <i class="bi bi-pin-map"></i>
            </div>
        </div>

        <div class="text-white mt-3 mb-2">Rekening</div>
        <fieldset class="form-group position-relative has-icon-left mb-4 d-flex align-items-center">
           
            <select class="form-select form-control form-control-md " style="background-color: #1e1e2d; border: 1px solid #35354f; color:#607080; "
                id="basicSelect">
               
                <option>Bank yang Digunakan</option>
            </select>
            <div class="form-control-icon">
                <i class="bi bi-credit-card"></i>
            </div>
        </fieldset>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-md text-white" name="Nomor Rekening"
                placeholder="Nomor Rekening">
            <div class="form-control-icon">
                <i class="bi bi-credit-card"></i>
            </div>
        </div>

        <div class="text-white mt-3 mb-2">Akun</div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input class="form-control form-control-md text-white" type="text" name="username" placeholder="Username"
              >
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input class="form-control form-control-md text-white" type="email" name="email" placeholder="Email"
              >
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>

        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-md text-white" name="password" placeholder="Password"
               >
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-md text-white" name="password" placeholder="Konfirmasi Password"
               >
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>


       
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Daftar</button>
    </form>
    <div class="text-center mt-5 text-lg fs-4">
        <p class='not-register text-gray-600'>Sudah punya akun? <a href="{{ route('login') }}" class="font-bold text-decoration-none">Masuk</a></p>
    </div>
</div>
@stop