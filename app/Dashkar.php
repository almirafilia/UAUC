<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashkar extends Model
{
    protected $table = 'karyawans';

    protected $fillable = ['jenistemuan', 'area', 'lokasi', 'tanggal', 'deskripsi', 'rekomendasi']; 
}
