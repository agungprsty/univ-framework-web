<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'jurusan', 'singkat', 'jenjang'];

    public function mataKuliahs()
    {
        return $this->hasMany(MataKuliah::class);
    }

}
