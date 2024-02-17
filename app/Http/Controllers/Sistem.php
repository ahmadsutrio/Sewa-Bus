<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sewa;
use App\Models\Akun;
use App\Models\Bus;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class Sistem extends Controller
{
    public function tampil()
    {
        $daftarBus = Bus::ambil();
        return view('HalamanDepan/HalamanDepan', [
            "title" => "Beranda",
            "data" => $daftarBus
        ]);
    }

    public function tampilDaftarAkun()
    {

        return view('HalamanDaftar/HalamanDaftar', [
            "title" => "Daftar-Akun"
        ]);
    }
    public function tampilMasuk()
    {
        return view('HalamanMasuk/HalamanMasuk', [
            "title" => "Daftar-Bus"
        ]);
    }
    public function tampilSemuaBus()
    {
    $data = Bus::ambil();
        return view('HalamanAdmin/HalamanBus/HalamanBus', [
            "title" => "Daftar-Bus",
            "data" => $data
        ]);
    }

    public function tampilBusTersedia()
    {
        $data = Bus::where('statusBus', 'Tersedia')->get();
        return view('HalamanAdmin/HalamanDaftarBusTersedia/HalamanDaftarBusTersedia', [
            "title" => "Daftar-Bus",
            "data" => $data
        ]);
    }

    public function tampilBusDisewa()
    {
        $data = Bus::where('statusBus', 'Disewa')->get();
        return view('HalamanAdmin/HalamanDaftarBusDisewa/HalamanDaftarBusDisewa', [
            "title" => "Daftar-Bus",
            "data" => $data
        ]);
    }

    public function tampilBerandaAdmin()
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

    public function tampilStatusPenyewaan()
    {
        $data = Sewa::ambil();
        return view('HalamanAdmin/HalamanPenyewaan/HalamanPenyewaan', [
            "title" => "Penyewaan",
            "data"  => $data
        ]);
    }
    public function tampilStatusDisewa($idAkun)
    {
        $data = Sewa::where('idAkun', $idAkun)->get();

        return view('HalamanStatusPenyewaan/HalamanStatusPenyewaan', [
            "title" => "Status Sewa",
            "data"  => $data
        ]);
    }
    public function tampilProfil($idAkun)
    {
        $data  = Akun::where('idAkun', $idAkun)->get();
        // $data = DaftarBusModel::paginate(2);
        return view('HalamanProfil/HalamanProfil', [
            "title" => "Profil",
            "data" => $data
        ]);
    }

    public function daftar(Request $request)
    {
        $user = Akun::simpan($request);
        return redirect('/masuk')->with('success', 'Berhasil Daftar');
        return back()->with('toast_error', 'Daftar gagal konfirmasi kata sandi tidak sesuai');
    }

    public function masuk(Request $request)
    {
        $result = User::cek($request->email, $request->password);
        if ($result) {
            $request->session()->regenerate();
            if (auth()->user()->roleAkun === 'Adminstrator') {
                // jika user superadmin
                return redirect()->intended('Admin/Beranda');
            } else {
                // jika user pengguna
                return redirect()->intended('/');
                // ->with('success', 'Berhasil Masuk');
            }
        }

        return back()->with('toast_error', 'Maaf Email/Kata Sandi Anda Salah');
    }

    public function keluar(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function cari(Request $request)
    {
        if ($request->has('search')) {
            $mobil = Bus::where('namaBus', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $mobil = Bus::all();
        }
        return view('HalamanAdmin/HalamanBus/HalamanBus', [
            "title" => "Daftar-Bus",
            "data" => $mobil
        ]);
    }

    public function hapus($id)
    {
        $data = Bus::hapus($id);
        return view('HalamanAdmin/HalamanBus/HalamanBus', [
            "title" => "Daftar-Bus",
            'data' => Bus::all(),
            Alert::success('Data Berhasil Dihapus')
        ]);
    }
    public function hapusPenyewaan($idSewa)
    {
        $data = Sewa::find($idSewa);
        $data->delete();
        return view('HalamanAdmin/HalamanPenyewaan/HalamanPenyewaan', [
            "title" => "Penyewaan",
            'data' => Sewa::all(),
            Alert::success('Data Berhasil Dihapus')
        ]);
    }

    public function ubah(Request $request, $id)
    {
        $ubah = Bus::ubah($request, $id);
        return view('HalamanAdmin/HalamanBus/HalamanBus', [
            "title" => "Daftar-Bus",
            'data' => Bus::all(),
            Alert::success('Data Berhasil Diubah')
        ]);
    }
    public function ubahStatusPenyewaan(Request $request, $idSewa, $idBus)
    {
        $data = Sewa::find($idSewa);
        $data2 = Bus::find($idBus);
        $data2->statusBus = $request->input('statusBus');
        $data2->update();
        $data->nominalBayar = $request->input('nominalBayar');
        $data->statusSewa = $request->input('statusSewa');
        $data->statusBayar = $request->input('statusBayar');
        $data->update();
        $data  = Sewa::get();

        return view('HalamanAdmin/HalamanPenyewaan/HalamanPenyewaan', [
            "title" => "Penyewaan",
            "data" => $data,
            Alert::success('Berhasil Mengubah Data Penyewaan')
        ]);
    }

    public function ubahProfil(Request $request, $idAkun)
    {
        $data = Akun::find($idAkun);
        $data->namaLengkap = $request->input('namaLengkap');
        $data->email = $request->input('email');
        $data->nomorHp = $request->input('nomorHp');
        $data->alamat = $request->input('alamat');
        $data->jenisKelamin = $request->input('jenisKelamin');

        $data->update();
        $data  = Akun::where('idAkun', $idAkun)->get();

        return view('HalamanProfil/HalamanProfil', [
            "title" => "Profil",
            "data" => $data,
            Alert::success('Berhasil Mengubah Profil')
        ]);
    }

    public function tambah(Request $request)
    {
        $data = Bus::create($request->all());
        if ($request->hasFile('fotoBus')) {
            $file = $request->file('fotoBus');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('img', $filename);
            $data->fotoBus = $filename;

            $data->update();
        }
        return view('HalamanAdmin/HalamanBus/HalamanBus', [
            "title" => "Daftar-Bus",
            'data' => Bus::all(),
            Alert::success('Data Berhasil Ditambah')
        ]);
    }

    public function sewa(Request $request)
    {
        // return view('');
        // dd($request->all());
        $data = Sewa::create($request->all());
        $data->idBus = $request->input('idBus');
        $data->idAkun = $request->input('idAkun');
        $data->lokasiPenjemputan = $request->input('lokasiPenjemputan');
        $data->alamatPenjemputan = $request->input('alamatPenjemputan');
        $data->lokasiTujuan = $request->input('lokasiTujuan');
        $data->tanggalPergiSewa = $request->input('tanggalPergiSewa');
        $data->jumlahHariPenyewaan = $request->input('jumlahHariPenyewaan');
        $data->totalHarga = $request->input('totalHarga');
        $data->nominalBayar = $request->input('nominalBayar');
        $data->sisaBayar = $request->input('totalHarga') - $request->input('nominalBayar');
        $data->statusBayar = 'Belum lunas';
        $data->statusSewa = 'Diproses';

        if ($request->hasFile('buktiBayar')) {
            $destination = '/buktiBayar/' . $data->buktiBayar;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('buktiBayar');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('buktiBayar', $filename);
            $data->buktiBayar = $filename;

            $data->update();
        }
        return redirect()->intended('/')->with('success', 'Berhasil Mengajukan Penyewaan');
    }
}
