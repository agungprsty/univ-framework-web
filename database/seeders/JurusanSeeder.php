<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        $jurusans = [
            ['id' => 311, 'jurusan' => 'Rekayasa Perangkat Lunak Aplikasi', 'singkat' => 'RPLA', 'jenjang' => 'D-3'],
            ['id' => 312, 'jurusan' => 'Sistem Informasi Akuntansi', 'singkat' => 'SIA', 'jenjang' => 'D-3'],
            ['id' => 321, 'jurusan' => 'Teknologi Komputer', 'singkat' => 'TK', 'jenjang' => 'D-3'],
            ['id' => 541, 'jurusan' => 'Informatika', 'singkat' => 'IF', 'jenjang' => 'S-1'],
            ['id' => 561, 'jurusan' => 'Sistem Informasi', 'singkat' => 'SI', 'jenjang' => 'S-1'],
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
