<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    public $primaryKey = 'id_peminjaman';
    protected $fillable = [
        'tgl_peminjaman', 'tgl_kembali', 'denda_pinjam' 
    ];
}
