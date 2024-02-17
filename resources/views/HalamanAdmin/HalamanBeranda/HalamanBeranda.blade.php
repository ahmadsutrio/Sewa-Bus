<?php
class HalamanBeranda{
    public function tampil()
    {
        $data['daftarBus'] = Bus::ambilJumlahBus();
        $data['daftarBusTersedia'] = Bus::where('statusBus', 'Tersedia')->get()->count();
        $data['daftarBusDisewa'] = Bus::where('statusBus', 'Disewa')->get()->count();
        $data['daftarAkun'] = Akun::ambilJumlahAkun();
        return view('HalamanAdmin/HalamanBeranda/HalamanBeranda', [
            "title" => "Beranda",
            'data' => $data
        ]);
    }
}
?>
@extends('template.admin')
@section('content')
    <div class="section-koleksi  mt-5 py-2  ">
        <div class="ms-lg-5 ms-2 mt-5  me-1 me-lg-4 row justify-content-center gap-4  ">
            <div class="col-12 mb-4 text-center">
                <h3 style="color: #2EAAD0;" class="fs-2">SELAMAT DATANG DI SISTEM INFORMASI <br> PENYEWAAN BUS BALENONG</h3>
            </div>
            <div class="col-lg-4 border py-5 shadow-lg" style="border-radius:15px; background-color:#52A6C8;">
                <div class="row pb-3 pt-1 ">
                    <h1 class="col-12 fw-bold text-center text-white m-0">{{ $data['daftarBus'] }}</h1>
                    <h2 class="col-12 text-center fw-bold text-white">Total Bus</h2>
                </div>
            </div>
            <div class="col-lg-4  border py-5 shadow-lg" style="border-radius:15px; background: #52C865;">
                <div class="row pb-3 pt-1 ">
                    <h1 class="col-12 fw-bold text-center text-white m-0">{{ $data['daftarBusTersedia'] }}</h1>
                    <h2 class="col-12 text-center fw-bold text-white">Bus Tersedia</h2>
                </div>
            </div>
            <div class="col-lg-4  border py-5 shadow-lg" style="border-radius:15px; background: #C8A052;">
                <div class="row pb-3 pt-1 ">
                    <h1 class="col-12 fw-bold text-center text-white m-0">{{ $data['daftarBusDisewa'] }}</h1>
                    <h2 class="col-12 text-center fw-bold text-white">Bus Disewa</h2>
                </div>
            </div>
            <div class="col-lg-4  border py-5 shadow-lg" style="border-radius:15px; background: #C85252;">
                <div class="row pb-3 pt-1 ">
                    <h1 class="col-12 fw-bold text-center text-white m-0">{{ $data['daftarAkun'] }}</h1>
                    <h2 class="col-12 text-center fw-bold text-white">Pengguna</h2>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection
