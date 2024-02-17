<?php
class HalamanBus{
    public function tampil()
    {
        $data = Bus::ambil();
        return view('HalamanAdmin/HalamanDaftarSemuaBus/HalamanDaftarSemuaBus', [
            "title" => "Daftar-Bus",
            "data" => $data
        ]);
    }
}
?>
@extends('template.admin')
@section('content')
    <!-- home content -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body border m-2 border-0">
                    <h3 class="text-start fw-bolder">Tambah Bus</h3>
                    <p class="w-100">Silahkan isi data berikut untuk melakukan penambahan bus</p>
                    <form action="/Admin/DaftarSemuaBus" method="post" enctype="multipart/form-data"
                        class="form-control border-0 w-100 m-0 p-0">
                        @csrf
                        <table class="table">
                            <tr>
                                <td class="border-0">
                                    <label for="namaBus" class="bg-white fw-bold">Nama Bus </label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 ">
                                    <input type="text" class="form-control w-100" name="namaBus" id="namaBus"
                                        placeholder="Nama Bus" value="" autocomplate="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <label for="supirSatu" class="bg-white fw-bold">Pengemudi Satu</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 ">
                                    <input type="text" class="form-control w-100" name="supirSatu" id="supirSatu"
                                        placeholder="Nama Pengemudi 1" value="" autocomplate="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0 ">
                                    <label for="supirDua" class="bg-white fw-bold">Pengemudi Dua</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0">
                                    <input type="text" class="form-control w-100" name="supirDua" id="supirDua"
                                        placeholder="Nama Pengemudi 2" value="" autocomplate="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0 ">
                                    <label for="hargaSewa" class="bg-white fw-bold">Harga sewa</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 ">
                                    <input type="number" class="form-control w-100" name="hargaSewa" id="hargaSewa"
                                        placeholder="Harga Sewa" value="" autocomplate="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0 m-0 p-0 ">
                                    <label for="statusBus"
                                        class="label-daftar form-control border-0 text-capitalize fw-bold">status
                                        bus</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0">
                                    <select class="form-select form-control rounded-3" aria-label="Default select example"
                                        autocomplete="off" name="statusBus" required id="statusBus"
                                        placeholder="Pilih status bus">
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Disewa">Disewa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <label for="kapasitasPenumpang" class="bg-white fw-bold">Tempat Duduk</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 ">
                                    <input type="" class="form-control w-100" name="kapasitasPenumpang"
                                        id="kapasitasPenumpang" placeholder="Tempat Duduk" value=""
                                        autocomplate="off" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 m-0 p-0 ">
                                    <label for="fasilitasBus"
                                        class="label-daftar form-control border-0 text-capitalize fw-bold">Fasilitas</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 ">
                                    <select class="form-select form-control rounded-3" aria-label="Default select example"
                                        autocomplete="off" name="fasilitasBus" required id="status_bus"
                                        placeholder="Pilih status bus" value="">
                                        <option value="AC">AC</option>
                                        <option value="-">Tanpa Ac</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="border-0">
                                    <label for="formFile"
                                        class="label-daftar form-control border-0 text-capitalize mt-1 fw-bold">Foto
                                        Bus</label>
                                </td>
                            </tr>
                            <tr>
                                <td class="bg-white border-0 m-0 p-0">
                                    <input class="form-control" type="file" name="fotoBus" id="formFile"
                                        value="" autocomplate="off">
                                </td>
                            </tr>
                        </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn text-white" style="background: #3D8AA9;">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="section-koleksi  mt-5 py-2 ">
        <div class="ms-lg-5 ms-2 me-1 me-lg-5 row ">
            <h2 class="fw-bold text-capitalize my-auto mt-3 mb-3 d-block w-100 ">daftar Bus </h2>
            <div class="col ">
                <a href="/Admin/DaftarBusTersedia" class="btn text-white px-3" style="background: #3D8AA9;">Tersedia</a>
                <a href="/Admin/DaftarBusDisewa" class="btn text-white px-3 ms-lg-3"
                    style="background: #3D8AA9;">Disewa</a>
            </div>
            <div class="offset-lg- col-lg-6 justify-content-lg-end container-link-member d-flex ">
                <form action="/Admin/Search" method="GET" class="d-flex row   ">
                    <div class="col d-flex border rounded-3 align-items-center justify-content-center">
                        <span class="my-auto ms-lg-0"><i class="fa-solid fa-magnifying-glass"></i></span>
                        <input type="text" name="search" id="keyword" autocomplete="off" placeholder="Cari.."
                            class="" size="30" value="{{ request('search') }}" />
                    </div>
                    <div class="col d-flex row-cols-2 row-cols-lg-auto ">
                        <button class="btn ms-lg-0 mt-1 mt-lg-0 mt-sm-0 col" type="submit"
                            style="background: #3D8AA9;">Cari</button>
                        <a class="link-tambah-data d-flex col ms-2 mt-1 mt-lg-0 mt-sm-0 btn " data-bs-toggle="modal"
                            data-bs-target="#tambah" data-bs-whatever="@getbootstrap" style="background: #3D8AA9;">
                            <i class="fa-solid fa-plus mx-auto "></i>
                            <span class="ms-2">tambah</span>
                        </a>
                    </div>
                </form>
            </div>


            <form action="" class="w-100 p-0 table-responsive ">
                <table class="table mt-4 table-borderless w-100 rounded-top">
                    <thead class="">
                        <tr class="row-awal">
                            <td class="align-middle text-center fw-bold py-2">No</td>
                            <td class="align-middle text-center fw-bold py-2">Foto Bus</td>
                            <td class="align-middle text-center fw-bold py-2">Nama Bus</td>
                            <td class="align-middle text-center fw-bold py-2">Pengemudi 1</td>
                            <td class="align-middle text-center fw-bold py-2">Pengemudi 2</td>
                            <td class="align-middle text-center fw-bold py-2">Tempat Duduk</td>
                            <td class="align-middle text-center fw-bold py-2">Fasiltas</td>
                            <td class="align-middle text-center fw-bold py-2">Status</td>
                            <td class="align-middle text-center fw-bold py-2">Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->count() > 0)
                            @foreach ($data as $daftarBus)
                                <tr class="">
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center"><img src="/img/{{ $daftarBus->fotoBus }}"
                                            class="img-fluid" width="90" alt="" srcset=""></td>
                                    <td class="align-middle text-center">{{ $daftarBus->namaBus }}</td>
                                    <td class="align-middle text-center">{{ $daftarBus->supirSatu }}</td>
                                    <td class="align-middle text-center">{{ $daftarBus->supirDua }}</td>
                                    <td class="align-middle text-center">{{ $daftarBus->kapasitasPenumpang }}</td>
                                    <td class="align-middle text-center">{{ $daftarBus->fasilitasBus }}</td>
                                    <td class="align-middle text-center ">{{ $daftarBus->statusBus }}</td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="" class=" border d-block p-1 ms-1 text-white bg-success"
                                                data-bs-toggle="modal" data-bs-target="#ubah-{{ $daftarBus->idBus }}"
                                                data-bs-whatever="@getbootstrap">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="" class=" border d-block p-1 text-white bg-danger"
                                                data-bs-toggle="modal" data-bs-target="#hapus-{{ $daftarBus->idBus }}"
                                                data-bs-whatever="@getbootstrap">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="border">
                                <td colspan="9" align="center" valign="">
                                    <p class="text-center fw-2 w-100">Data Tidak Ditemukan</p>
                                </td>
                            </tr>
                        @endif

                    </tbody>
                </table>
            </form>

            {{-- <ul class="pagination col justify-content-center ">
                <li class="page-item"><a class="page-link text-dark" href="#">Kembali</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">1</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">2</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">3</a></li>
                <li class="page-item"><a class="page-link text-dark" href="#">Selanjutnya</a></li>
            </ul> --}}
            <!-- Modal form-->
            @foreach ($data as $item)
                <div class="modal fade" id="ubah-{{ $item->idBus }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form method="POST"
                                    action="{{ url('/Admin/DaftarSemuaBus/update-data/' . $item->idBus) }}"
                                    enctype="multipart/form-data" class="form-control border-0 w-100 m-0 p-0">
                                    @csrf
                                    @method('PUT')
                                    <table class="table">
                                        <tr>
                                            <td class="border-0">
                                                <label for="namaBus" class="bg-white fw-bold">Nama Bus </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="text" class="form-control w-100" name="namaBus"
                                                    id="namaBus" placeholder="Nama buku" value="{{ $item->namaBus }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="supirSatu" class="bg-white fw-bold">Pengemudi 1</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="text" class="form-control w-100" name="supirSatu"
                                                    id="supirSatu" placeholder="Nama buku"
                                                    value="{{ $item->supirSatu }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="supirDua" class="bg-white fw-bold">Pengemudi 2</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="text" class="form-control w-100" name="supirDua"
                                                    id="supirDua" placeholder="Nama buku" value="{{ $item->supirDua }}"
                                                    required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="hargaSewa" class="bg-white fw-bold">Harga sewa</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="number" class="form-control w-100" name="hargaSewa"
                                                    id="hargaSewa" placeholder="Nama buku"
                                                    value="{{ $item->hargaSewa }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 m-0 p-0 ">
                                                <label for="statusBus"
                                                    class="label-daftar form-control border-0 text-capitalize fw-bold">status
                                                    bus</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <select class="form-select form-control rounded-3"
                                                    aria-label="Default select example" autocomplete="off"
                                                    name="statusBus" required id="statusBus"
                                                    placeholder="Pilih status bus">
                                                    {{-- <option value="Tersedia">Tersedia</option>
                                                    <option value="Disewa">Disewa</option> --}}
                                                    <option
                                                        value="Tersedia"{{ $item->statusBus === 'Tersedia' ? 'selected' : '' }}>
                                                        Tersedia</option>
                                                    <option value="Disewa"
                                                        {{ $item->statusBus === 'Disewa' ? 'selected' : '' }}>Disewa
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="kapasitasPenumpang" class="bg-white fw-bold">Tempat Duduk</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="" class="form-control w-100"
                                                    name="kapasitasPenumpang" id="kapasitasPenumpang"
                                                    placeholder="Kapasitas Penumpang"
                                                    value="{{ $item->kapasitasPenumpang }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0 ">
                                                <label for="fasilitasBus"
                                                    class="label-daftar form-control border-0 text-capitalize mt-1 fw-bold">Fasilitas</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <select class="form-select form-control rounded-3"
                                                    aria-label="Default select example" autocomplete="off"
                                                    name="fasilitasBus" required id="statusBus"
                                                    placeholder="Pilih status bus" value="">
                                                    <option value="AC">AC</option>
                                                    <option value="-">Tanpa Ac</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 m-0 p-0">
                                                <label for="formFile"
                                                    class="label-daftar form-control border-0 text-capitalize mt-1 fw-bold">Foto
                                                    Bus</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input class="form-control" type="file" name="fotoBus" id="formFile"
                                                    value="">
                                            </td>
                                        </tr>
                                    </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn text-white" style="background: #3D8AA9;">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($data as $hapusItem)
                <div class="modal fade" id="hapus-{{ $hapusItem->idBus }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p class="h5 text-center my-5">Apakah anda yakin akan menghapus <br> <span
                                        class="text-danger text-capitalize">{{ $hapusItem->namaBus }}</span>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="/Admin/DaftarSemuaBus/hapus-data/{{ $hapusItem->idBus }}" type="button"
                                    type="submit" class="btn btn-danger">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>


@endsection
