<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    public function tabungan()
    {
        return $this->hasMany(tabungan::class, 'id_siswa');
    }
}
