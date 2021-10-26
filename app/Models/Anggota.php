<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facaddes\DB;

class Anggota extends Model
{
    use HasFactory;
    public $primaryKey = 'id_agt';
    protected $fillable = [
        'nama_agt', 'nim_agt', 'alamat_agt', 'id_peminjaman', 'status',
    ];
    static function getAnggota(){
        $return=DB::table('anggotas')
        ->join('id_peminjaman', 'tgl_peminjaman', 'tgl_kembali', 'denda_pinjam');
        return $return;
    }
}
