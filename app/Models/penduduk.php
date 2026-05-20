<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class penduduk extends Model
{
    protected $fillable = ['nama', 'nik', 'jenis_kelamin', 'alamat'];
    // Relasi: Penduduk memiliki banyak Surat
    public function surats(): HasMany
    {
        return $this->hasMany(Surat::class);
    }
}
