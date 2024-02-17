<?php
class HalamanPenyewaan{
    public function tampil()
    {
        $data = Sewa::get();
        return view('HalamanAdmin/HalamanPenyewaan/HalamanPenyewaan', [
            "title" => "Penyewaan",
            "data"  => $data
        ]);
    }
}
?>
@extends('template.admin')
@section('content')
    <div class="container-fluid mx-2 p-0 mt-5 overflow-auto">
        <div class="container mt-5">
            <h2 class="w-100 fw-bold">Penyewaan Bus</h2>
            <table class="table mt-4 table-borderless w-100 rounded-top">
                <thead class="">
                    <tr class="row-awal">
                        <td class="align-middle text-center">No</td>
                        <td class="align-middle text-center">Nama Bus</td>
                        <td class="align-middle text-center">Nama Penyewa</td>
                        <td class="align-middle text-center">Tanggal Penyewaan</td>
                        <td class="align-middle text-center">Lama Penyewaan</td>
                        <td class="align-middle text-center">Alamat Penjemputan</td>
                        <td class="align-middle text-center">Alamat Tujuan</td>
                        <td class="align-middle text-center">Total Harga</td>
                        <td class="align-middle text-center">Total Yang Dibayaran</td>
                        <td class="align-middle text-center">Sisa Bayar</td>
                        <td class="align-middle text-center">Bukti Pembayaran</td>
                        <td class="align-middle text-center">Status Penyewaan</td>
                        <td class="align-middle text-center">Status Bayar</td>
                        <td class="align-middle text-center">Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    @if ($data->count() > 0)
                        @foreach ($data as $item)
                            <form action="" class="w-100 p-0 table-responsive">
                                @csrf
                                @method('PUT')
                                <tr class="">
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center">{{ $item->Bus['namaBus'] }}</td>
                                    <td class="align-middle text-center">{{ $item->akun['namaLengkap'] }}</td>
                                    <td class="align-middle text-center">{{ $item->tanggalPergiSewa }}</td>
                                    <td class="align-middle text-center">{{ $item->jumlahHariPenyewaan }} Hari</td>
                                    <td class="align-middle text-center">
                                        {{ $item->lokasiPenjemputan }}, <br>{{ $item->alamatPenjemputan }}</td>
                                    <td class="align-middle text-center">{{ $item->lokasiTujuan }}</td>
                                    <td class="align-middle text-center">Rp. {{ number_format($item->totalHarga) }}</td>
                                    <td class="align-middle text-center">Rp. {{ number_format($item->nominalBayar) }}</td>
                                    <td class="align-middle text-center">Rp.
                                        {{ number_format($item->totalHarga - $item->nominalBayar) }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="" type="submit" class="border" data-bs-toggle="modal"
                                            data-bs-target="#foto-{{ $item->idSewa }}" data-bs-whatever="@getbootstrap">
                                            <img width="50" src="/buktiBayar/{{ $item->buktiBayar }}" alt="">
                                        </a>
                                    </td>
                                    <td class="align-middle text-center">{{ $item->statusSewa }}</td>
                                    <td class="align-middle text-center">{{ $item->statusBayar }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <a href="" class=" border d-block p-1 ms-1 text-white bg-success"
                                                data-bs-toggle="modal"
                                                data-bs-target="#ubah-{{ $item->Bus['idBus'] }}"
                                                data-bs-whatever="@getbootstrap">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </a>
                                            <a href="" class=" border d-block p-1 tephp text-white bg-danger"
                                                data-bs-toggle="modal"
                                                data-bs-target="#hapus-{{ $item->Bus['idBus'] }}"
                                                data-bs-whatever="@getbootstrap">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    @else
                        <tr class="border">
                            <td colspan="11" align="center" valign="">
                                <p class="text-center fw-2 w-100">Tidak Ada Penyewaan</p>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            @foreach ($data as $item)
                <div class="modal fade" id="ubah-{{ $item->idBus }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form method="POST" action="{{ url('Admin/penyewaan/' . $item->idSewa, $item->idBus) }}"
                                    enctype="multipart/form-data" class="form-control border-0 w-100 m-0 p-0">
                                    @csrf
                                    @method('PUT')
                                    <table class="table">
                                        <tr>
                                            <td class="border-0">
                                                <label for="nominalBayar" class="bg-white fw-bold">Total Biaya yang dibayarkan</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <input type="text" class="form-control w-100" name="nominalBayar"
                                                    id="nominalBayar" placeholder="Nominal Yang dibayarkan"
                                                    value="{{ $item->nominalBayar }}" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="statusSewa" class="bg-white fw-bold">Status Penyewaan</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <select class="form-select border-0" aria-label="Default select example"
                                                    name="statusSewa">
                                                    <option value="Diproses"
                                                        {{ $item->statusSewa === 'Diproses' ? 'selected' : '' }}>Diproses
                                                    </option>
                                                    <option value="Disewa"
                                                        {{ $item->statusSewa === 'Disewa' ? 'selected' : '' }}>
                                                        Disewa</option>
                                                    <option value="Kembali"
                                                        {{ $item->statusSewa === 'Kembali' ? 'selected' : '' }}>Kembali
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="statusBus" class="bg-white fw-bold">Status Bus</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <select class="form-select border-0" aria-label="Default select example"
                                                    name="statusBus">
                                                    <option value="Disewa"
                                                        {{ $item->statusBus === 'Disewa' ? 'selected' : '' }}>
                                                        Disewa</option>
                                                    <option value="Tersedia"
                                                        {{ $item->statusBus === 'Tersedia' ? 'selected' : '' }}>Kembali
                                                    </option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0">
                                                <label for="statusBayar" class="bg-white fw-bold">Status Bayar</label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bg-white border-0 m-0 p-0">
                                                <select class="form-select border-0" aria-label="Default select example"
                                                    id="statusBayar" name="statusBayar">
                                                    <option value="Belum lunas"
                                                        {{ $item->statusBus === 'Belum lunas' ? 'selected' : '' }}>Belum
                                                        lunas
                                                    </option>
                                                    <option value="Lunas"
                                                        {{ $item->statusBus === 'Lunas' ? 'selected' : '' }}>
                                                        Lunas</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary"
                                    style="background: #3D8AA9;">Simpan</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            @foreach ($data as $hapusItem)
                <div class="modal fade" id="hapus-{{ $hapusItem->Bus['idBus'] }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <p class="h5 text-center my-5">Apakah anda yakin akan menghapus data pemesanan dari <span
                                        class="text-danger">{{ $hapusItem->akun['namaLengkap'] }}</span>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <a href="/Admin/penyewaan/hapus-data/{{ $hapusItem->idSewa }}" type="button"
                                    type="submit" class="btn btn-danger">Oke</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Modal -->
            @foreach ($data as $gambar)
                <div class="modal fade" id="foto-{{ $gambar->idSewa }}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <img width="400" src="/buktiBayar/{{ $gambar->buktiBayar }}" alt="">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
