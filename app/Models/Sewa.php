<?php

namespace App\Models;

use App\Models\Bus;
use App\Models\Akun;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sewa extends Model
{
    use HasFactory;
    protected $table = 'sewa';
    protected $guarded = ['idSewa'];
    protected $primaryKey = 'idSewa';
    protected $fillable = [
        'idBus',
        'idAkun',
        'lokasiPenjemputan',
        'alamatPenjemputan',
        'lokasiTujuan',
        'tanggalPergiSewa',
        'jumlahHariPenyewaan',
        'totalHarga',
        'nominalBayar',
        'sisaBayar',
        'buktiBayar',
        'statusBayar',
        'statusSewa',
    ];
    public $timestamps = false;

    public static function ambil(){
        return Sewa::get();
    }
    public static function simpan(Request $request){
        return Sewa::create($request->all());
    }
    public static function ubah($idBus){
        return Bus::find($idBus);
    }

    //Untuk membuat relasi antar tabel
    public function akun(){
        return $this->belongsTo(Akun::class, 'idAkun');
    }
    public function Bus(){
        return $this->belongsTo(Bus::class, 'idBus');
    }
}
