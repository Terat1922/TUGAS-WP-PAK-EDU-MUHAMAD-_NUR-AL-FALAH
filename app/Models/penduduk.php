<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    use HasFactory;
    //khusus yang nama tabelnya tidak plural atau cuman penduduk
    protected $table = 'penduduk';
    //variable ini berfungsi untuk melakukan ignore pada kolom yang di deklarasikan atau tidak diisi
    protected $guarded = [];
    //variable ini berfungsi untuk mengijinkan kolom yang di deklarasikan atau di isi
    //protected $fillable
}
