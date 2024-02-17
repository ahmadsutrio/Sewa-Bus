<?php
class HalamanProfil{
    public function tampil()
    {
       $data  = Akun::where('idAkun', $idAkun)->get();
        return view('HalamanProfil/HalamanProfil', [
            "title" => "Profil",
            "data" => $data
        ]);
    }
}
?>

@extends('template.main')
@section('style','profil')
@section('content')
  <!-- content -->
  <div class="container mt-5 pt-5">
    <div class="row justify-content-center">

      <!-- profil -->
      <div class="col-lg-6 col-md-7 overflow-hidden border bg-info-profil mb-5 mb-lg-0 mb-md-0  mt-2">
        @foreach($data as $data)
        <form action="{{ url('/profil/' . $data->idAkun) }}" class="form-control mt-lg-3 bg-info-profil border-0 py-3 " method="post">
          @csrf  
          @method('PUT')
          <h3 class="text-center ">Profil</h3>
          <table class="w-100">
            <tr>
              <td>
                <label for="nama" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">nama
                  lengkap</label>
              </td>
              <td>
                <input type="text" size="30" name="namaLengkap" id="nama" class=" mt-4 form-control ps-3 border-0 rounded-pill w-100" placeholder="Masukan Nama Lengkap"
                  autocomplete="off" required value="{{ $data->namaLengkap }}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="email" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">Email</label>
              </td>
              <td>
                <input type="email" size="30" readonly name="email" id="email" style="cursor:not-allowed" class="  bg-white mt-4 form-control ps-3 border-0 rounded-pill w-100" placeholder="Masukan Email"
                  autocomplete="off" required value="{{ $data->email }}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="telepon" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">No. Telepon</label>
              </td>
              <td>
                <input type="text" size="30" name="nomorHp" id="telepon" class=" mt-4 form-control ps-3 border-0 rounded-pill w-100" placeholder="Masukan No telepon"
                  autocomplete="off" required value="{{ $data->nomorHp }}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="Alamat" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">Alamat</label>
              </td>
              <td>
                <input type="text" size="30" name="alamat" id="Alamat" class=" mt-4 form-control ps-3 border-0 rounded-pill w-100"
                  placeholder="Masukan Alamat" autocomplete="off" required value="{{ $data->alamat }}">
              </td>
            </tr>
            <tr>
              <td>
                <label for="jenis-kelamin" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">Jenis kelamin</label>
              </td>
              <td>
                <select id="jenis-kelamin" class="form-select  mt-4 form-control ps-3 border-0 rounded-pill w-100" aria-label="Default select example" name="jenisKelamin" value="{{ $data->jenisKelamin }}">
                  <option value="Laki-laki"{{ $data->jenisKelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                  <option value="Perempuan" {{ $data->jenisKelamin === 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
              </td>
            </tr>
            {{-- <tr>
              <td>
                <label for="Password" class=" mt-4 fw-bold form-control bg-info-profil border-0 text-capitalize">Kata Sandi</label>
              </td>
              <td>
                <input type="password" size="30" name="password" id="Password" class=" mt-4 form-control ps-3 border-0 rounded-pill w-100"
                  placeholder="Masukan Password" autocomplete="off" required value="{{ $data->password }}">
              </td>
            </tr> --}}
            <tr>
              <td>

              </td>
              <td>
                <button class="btn bg-button-prymary fw-bold text-white mt-4 form-control ps-3 border-0 rounded-pill w-100"type="submit" name="">Simpan</button>
              </td>
            </tr>
          </table>
          @endforeach
        </form>
      </div>
    </div>
  </div>
@endsection