<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $guarded = ['id'];

    public function calonSiswa(){
        return $this->belongsTo(CalonSiswa::class, 'siswa_id');
    }
}
