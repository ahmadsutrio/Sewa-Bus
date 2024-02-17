<?php
class HalamanMasuk{
    public function tampil()
    {
        return view('HalamanMasuk/HalamanMasuk', [
            "title" => "Daftar-Bus"
        ]);
    }
}
?>
@extends('template.main2')
@section('style', 'masuk')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center mx-auto">
            <div class="col-12 mt-lg-3">
                <h4 class="text-uppercase text-center color-h-prymary mt-4">SELAMAT DATANG DI SISTEM INFORMASI</h4>
                <h4 class="text-uppercase text-center color-h-prymary">PENYEWAAN BUS BALENONG</h4>
                <p class="text-uppercase text-center color-p-prymary mt-4">SILAHKAN MASUK TERLEBIH DAHULU</p>
            </div>
            <div class="col-g-6  mt-lg-3">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-5 border pt-4 px-4 shadow-lg rounded-3 bg-white mb-5">
                        <form action="{{ route('masuk') }}" method="post" class="form-control border-0">
                            @csrf
                            <label for="email" class="label-daftar form-control border-0 text-capitalize fs-5">email</label>
                            <input type="email" name="email" id="email"
                                class="form-control rounded-3  p-2" placeholder="Masukan Nama Lengkap"
                                autocomplete="off" required>
                            <label for="password" class="label-daftar form-control border-0 text-capitalize mt-3 fs-5">kata
                                sandi</label>
                            <div class="input-group mb-3 ">
                                <input type="password" name="password" id="password"
                                    class="form-control rounded-3  p-2" placeholder="Masukan Kata Sandi"
                                    autocomplete="off" required>
                                <button type="button" onclick="btn_show()" class="input-group-text ounded-3 " id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" id="lihat" height="16"
                                        fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                            </div>
                            <button type="submit" class="btn form-control rounded-3 mt-3 text-capitalize text-white" style="background: #3D8AA9;">masuk</button>
                            <p class="text-capitalize text-center mt-4 ">Jika anda belum mempunyai akun
                                silahkan <a href="/daftar">Daftar</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const show = document.getElementById('lihat');
        const input = document.getElementById('password');
        function btn_show(){
            if(input.type === 'password'){
                input.type ='text';
                btn_show.classList.add('hide');
            }else{
                input.type ='password';
                btn_show.remove('hide');
            }
        }
    </script>
@endsection
