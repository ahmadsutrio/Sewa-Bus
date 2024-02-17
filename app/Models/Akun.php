<?php

namespace App\Models;

use App\Models\Bus;
use App\Models\Sewa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'akun';
    protected $primaryKey = 'idAkun';
    public $timestamps = false;
    protected $guarded = ['idAkun'];

    public static function cek($email, $password)
    {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }
    public static function ambilJumlahAkun(){
        return Akun::get()->count();
    }
    public static function simpan(Request $request){
        return Akun::create([
            'namaLengkap' => $request->namaLengkap,
            'nomorHp' => $request->nomorHp,
            'password' => bcrypt($request->password),
            'email' => $request->email,
            'roleAkun' => 'Pengguna',
            'jenisKelamin' => $request->jenisKelamin,
            'alamat' => $request->alamat,
        ]);
    }


    
    //untuk membuat relasi antar tabel
    public function Bus(){
        return $this->hasMany(Bus::class, 'idBus');
    }
    public function Sewa(){
        return $this->hasMany(Sewa::class, 'idSewa');
    }
}
