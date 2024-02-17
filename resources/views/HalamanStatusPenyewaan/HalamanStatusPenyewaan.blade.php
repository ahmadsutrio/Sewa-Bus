<?php
class HalamanStatusPenyewaan{
    public function tampil()
    {
        $data = Sewa::where('idAkun', $idAkun)->get();

        return view('HalamanPenyewaan/HalamanPenyewaan', [
            "title" => "Status Sewa",
            "data"  => $data
        ]);
    }
}
?>
@extends('template.main')
@section('style', 'penyewaan')
@section('content')
    <div class="container-fluid p-0 mt-5 overflow-hidden">
        <div class="container mt-5">
            <form action="" class="w-100 p-0 table-responsive ">
                <table class="table mt-4 table-borderless w-100 rounded-top">
                    <thead class="">
                        <tr class="row-awal">
                            <td class="align-middle text-center">No</td>
                            <td class="align-middle text-center">Nama Bus</td>
                            <td class="align-middle text-center">Nama Pengemudi</td>
                            <td class="align-middle text-center">Tanggal Penyewaan</td>
                            <td class="align-middle text-center">Lokasi Penjemputan</td>
                            <td class="align-middle text-center">Sisa Pembayaran</td>
                            <td class="align-middle text-center">Status Penyewaan</td>
                            <td class="align-middle text-center">Status Pembayaran</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($data->count() > 0)
                            @foreach ($data as $item)
                                <tr class="">
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center">{{ $item->Bus['namaBus'] }}</td>
                                    <td class="align-middle text-center">{{ $item->Bus['supirSatu']}}, {{  $item->Bus['supirDua'] }}</td>
                                    <td class="align-middle text-center">{{ $item->tanggalPergiSewa }}</td>
                                    <td class="align-middle text-center">{{ $item->alamatPenjemputan}}, {{ $item->lokasiPenjemputan }}</td>
                                    <td class="align-middle text-center">Rp. {{ number_format($item->totalHarga - $item->nominalBayar) }}</td>
                                    <td class="align-middle text-center">{{ $item->statusSewa }}</td>
                                    <td class="align-middle text-center">{{ $item->statusBayar }} </td>
                                </tr>
                            @endforeach
                        @else
                            <tr class="border">
                                <td colspan="11" align="center" valign="">
                                    <p class="text-center fw-2 w-100">Anda Belum Melakukan Penyewaan</p>
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <td class="bg-white"></td>
                        </tr>
                        <tr class="bg-white">
                            <td colspan="11">
                                <p><span class="fw-bold">Note :</span> Untuk informasi lebih lanjut silahkan hubungi administrator <a href="http://wa.me/+6282391520713" target="_blank">Hubungi Admin</a></p>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </form>
        </div>
    </div>
@endsection
