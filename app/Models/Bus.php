<?php

namespace App\Models;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\File;


class Bus extends Model
{
    use HasFactory;
    protected $table = 'bus';
    protected $guarded = ['idBus'];
    protected $primaryKey = 'idBus';
    protected $fillable = [
        'fotoBus',
        'namaBus',
        'supirSatu',
        'supirDua',
        'kapasitasPenumpang',
        'fasilitasBus',
        'hargaSewa',
        'statusBus'
    ];
    public $timestamps = false;

    public static function ambil(){
        return Bus::where('statusBus', 'Tersedia')->get();
    }
    public static function ambilJumlahBus(){
        return Bus::get()->count();
    }
    public static function ubah(Request $request,$id){
        $mobil = Bus::find($id);
        $mobil->namaBus = $request->input('namaBus');
        $mobil->supirSatu = $request->input('supirSatu');
        $mobil->supirDua = $request->input('supirDua');
        $mobil->statusBus = $request->input('statusBus');
        $mobil->hargaSewa = $request->input('hargaSewa');
        $mobil->kapasitasPenumpang = $request->input('kapasitasPenumpang');
        $mobil->fasilitasBus = $request->input('fasilitasBus');

        if ($request->hasfile('fotoBus')) {
            $destination = '/img/' . $mobil->fotoBus;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('fotoBus');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('img', $filename);
            $mobil->fotoBus = $filename;
        }
       return $mobil->update();
    }
    public static function hapus($id){
        $hapusMobil = Bus::find($id);
        return $hapusMobil->delete();
    }

    public function simpan(Request $request)
    {
        return Sewa::create($request->all());
    }



    
    //Untuk membuat relasi antar tabel
    public function akun(){
        return $this->hasMany(Akun::class, 'idAkun');
    }
    public function Sewa(){
        return $this->hasMany(Sewa::class, 'idSewa');
    }
}
