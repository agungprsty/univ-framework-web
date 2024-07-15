<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    public function run()
    {
        $mataKuliahs = [
            ['kode' => 'KP3004', 'mata_kuliah' => 'PRAK. PEMROGRAMAN WEB CLIENT', 'sks' => 1, 'jurusan_id' => 321, 'semester' => 1],
            ['kode' => 'KP4001', 'mata_kuliah' => 'PRAK. ALGORITMA DAN PEMROGRAMAN', 'sks' => 1, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KP4002', 'mata_kuliah' => 'PRAK. MANAJEMEN BASIS DATA', 'sks' => 1, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KP4003', 'mata_kuliah' => 'PRAK. JARINGAN KOMPUTER', 'sks' => 1, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KP4004', 'mata_kuliah' => 'PRAK. PEMROGRAMAN WEB CLIENT', 'sks' => 1, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KP5001', 'mata_kuliah' => 'PRAK. ALGORITMA DAN PEMROGRAMAN', 'sks' => 1, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KP5002', 'mata_kuliah' => 'PRAK. MANAJEMEN BASIS DATA', 'sks' => 1, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KP5003', 'mata_kuliah' => 'PRAK. JARINGAN KOMPUTER', 'sks' => 1, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KP5004', 'mata_kuliah' => 'PRAK. PEMROGRAMAN WEB CLIENT', 'sks' => 1, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KT1002', 'mata_kuliah' => 'MANAJEMEN BASIS DATA', 'sks' => 3, 'jurusan_id' => 311, 'semester' => 1],
            ['kode' => 'KT1003', 'mata_kuliah' => 'JARINGAN KOMPUTER', 'sks' => 3, 'jurusan_id' => 311, 'semester' => 1],
            ['kode' => 'KT1004', 'mata_kuliah' => 'PEMROGRAMAN WEB CLIENT', 'sks' => 2, 'jurusan_id' => 311, 'semester' => 1],
            ['kode' => 'KT2002', 'mata_kuliah' => 'MANAJEMEN BASIS DATA', 'sks' => 3, 'jurusan_id' => 312, 'semester' => 1],
            ['kode' => 'KT2003', 'mata_kuliah' => 'JARINGAN KOMPUTER', 'sks' => 3, 'jurusan_id' => 312, 'semester' => 1],
            ['kode' => 'KT2004', 'mata_kuliah' => 'PEMROGRAMAN WEB CLIENT', 'sks' => 2, 'jurusan_id' => 312, 'semester' => 1],
            ['kode' => 'KT3002', 'mata_kuliah' => 'MANAJEMEN BASIS DATA', 'sks' => 3, 'jurusan_id' => 321, 'semester' => 1],
            ['kode' => 'KT3003', 'mata_kuliah' => 'JARINGAN KOMPUTER', 'sks' => 3, 'jurusan_id' => 321, 'semester' => 1],
            ['kode' => 'KT3004', 'mata_kuliah' => 'PEMROGRAMAN WEB CLIENT', 'sks' => 2, 'jurusan_id' => 321, 'semester' => 1],
            ['kode' => 'KI4002', 'mata_kuliah' => 'MANAJEMEN BASIS DATA', 'sks' => 3, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KI4003', 'mata_kuliah' => 'JARINGAN KOMPUTER', 'sks' => 3, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KI4004', 'mata_kuliah' => 'PEMROGRAMAN WEB CLIENT', 'sks' => 2, 'jurusan_id' => 541, 'semester' => 1],
            ['kode' => 'KT5002', 'mata_kuliah' => 'MANAJEMEN BASIS DATA', 'sks' => 3, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KT5003', 'mata_kuliah' => 'JARINGAN KOMPUTER', 'sks' => 3, 'jurusan_id' => 561, 'semester' => 1],
            ['kode' => 'KT5004', 'mata_kuliah' => 'PEMROGRAMAN WEB CLIENT', 'sks' => 2, 'jurusan_id' => 561, 'semester' => 1],
        ];

        foreach ($mataKuliahs as $mataKuliah) {
            MataKuliah::create($mataKuliah);
        }
    }
}

