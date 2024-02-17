<?php
class HalamanDaftar{
    public function tampil()
    {
        return view('HalamanDaftar/HalamanDaftar', [
            "title" => "Daftar-Akun"
        ]);
    }
}
?>

@extends('template.main2')

@section('style', 'masuk')
@section('content')
    <div class="container-fluid">
        <div class="row border-1  justify-content-center">
            <div class="col-12">
                <h4 class="text-uppercase text-center color-h-prymary mt-4">SELAMAT DATANG DI SISTEM INFORMASI</h4>
                <h4 class="text-uppercase text-center color-h-prymary">PENYEWAAN BUS BALENONG</h4>
            </div>
            <div class="col-g-6  mt-4">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-9 border shadow-lg rounded-3 bg-white mb-5">
                        <div class="row p-4 align-items-center">
                            <div class="col-lg-6 mb-4 col-md-6 mb-lg-0 ">
                                <img src="img/image-daftar.png" class="img-fluid" srcset="">
                                {{-- <div class="w-75 mx-auto label-daftar">Jika anda sudah punya akun silahkan klik
                                    <a href="/masuk">
                                        disini
                                    </a>
                                </div> --}}
                            </div>
                            <div class="col border-start border-2">
                                <form action="{{ route('daftar') }}" method="post" class="form-control border-0">
                                    @csrf
                                    <label for="nama" class="label-daftar form-control border-0 text-capitalize">nama
                                        lengkap</label>
                                    <input type="text" name="namaLengkap" id="nama"
                                        class="form-control rounded-3" placeholder="Masukan Nama Lengkap"
                                        autocomplete="off" required>
                                    <label for="email"
                                        class="label-daftar form-control border-0 text-capitalize mt-1">email</label>
                                    <input type="email" name="email" id="email" class="form-control rounded-3"
                                        placeholder="Masukan Email" autocomplete="off" required>
                                    <label for="noTelp"
                                        class="label-daftar form-control border-0 text-capitalize mt-1">no.
                                        telepon</label>
                                    <input type="text" name="nomorHp" id="noTelp" class="form-control rounded-3"
                                        placeholder="Masukan No Telepon" autocomplete="off" required>
                                    <label for="jenisKelamin"
                                        class="label-daftar form-control border-0 text-capitalize mt-1">jenis
                                        kelamin</label>
                                    <input type="radio" name="jenisKelamin" value="laki-laki" id="laki-laki"
                                        class="ms-4 me-2" required>
                                    <label for="laki-laki" class="fs-6 text-capitalize" class="">Laki-laki</label>
                                    <input type="radio" name="jenisKelamin" value="perempuan" id="perempuan"
                                        class="ms-4 me-2" required>
                                    <label for="perempuan" class="fs-6 text-capitalize" class="">Perempuan</label>
                                    <label for="alamat"
                                        class="label-daftar form-control border-0 text-capitalize mt-1">alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control rounded-3"
                                        placeholder="Masukan No Alamat" autocomplete="off" required>
                                    <label for="password"
                                        class="label-daftar form-control border-0 text-capitalize mt-1">kata
                                        sandi</label>
                                    <div class="input-group  mb-3 ">
                                        <input type="password" name="password" id="password"
                                            class="form-control rounded-3  p-2" placeholder="Masukan Kata Sandi"
                                            autocomplete="off" required>
                                        <button type="button" onclick="btn_show()"
                                            class="input-group-text ounded-3 " id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" id="lihat"
                                                height="16" fill="currentColor" class="bi bi-eye-fill"
                                                viewBox="0 0 16 16">
                                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                                <path
                                                    d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <button
                                        class="btn form-control rounded-pill mt-3 text-capitalize text-white " style="background: #3D8AA9;">daftar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
