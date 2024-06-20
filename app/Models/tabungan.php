<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabungan extends Model
{
    use HasFactory;
    public function siswa()
    {
        return $this->belongsTo(siswa::class, 'id_siswa');
    }
}
