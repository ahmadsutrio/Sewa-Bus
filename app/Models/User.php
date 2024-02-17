<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory;
    protected $table = 'akun';
    protected $primaryKey = 'idAkun';
    public $timestamps = false;
    protected $fillable = ['namaLengkap', 'email', 'password'];

    public static function cek($email, $password) {
        return Auth::attempt(['email' => $email, 'password' => $password]);
    }
}
