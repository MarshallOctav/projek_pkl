<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'pertanyaan',
        'id_jenis_kepribadian',
    ];

    public function jenis_kepribadian()
    {
        return $this->belongsTo(Jenis_kepribadian::class, 'id_jenis_kepribadian');
    }
}
