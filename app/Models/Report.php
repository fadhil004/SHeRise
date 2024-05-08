<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = "reports";

    protected $fillable = [
        'nama_pelapor',
        'kontak_pelapor',
        'deskripsi_kejadian',
        'tanggal_kejadian',
        'foto_bukti',
    ];


}
