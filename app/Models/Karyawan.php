<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
  protected $fillable = [
        'nama',
        'email',
        'jabatan_id',
        'alamat',
        'tanggal_lahir'
    ];

    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }
}
