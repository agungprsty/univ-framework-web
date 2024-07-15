<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    public function index(Request $request)
    {
        $query = MataKuliah::query();

        // Filter Prodi Informatika
        if ($request->has('prodi') && $request->prodi == 'Informatika') {
            $query->whereHas('jurusan', function ($q) {
                $q->where('singkat', 'IF');
            });
        }

        // Filter Semester
        if ($request->has('semester')) {
            $semesters = explode(',', $request->semester);
            $query->whereIn('semester', $semesters);
        }

        // Filter Jenis (Teori atau Praktikum)
        if ($request->has('jenis')) {
            if ($request->jenis == 'Praktikum') {
                $query->where('mata_kuliah', 'like', 'PRAK.%');
            } elseif ($request->jenis == 'Teori') {
                $query->where('mata_kuliah', 'not like', 'PRAK.%');
            }
        }

        return $query->get();
    }

    public function store(Request $request)
    {
        $mataKuliah = MataKuliah::create($request->all());
        return response()->json($mataKuliah, 201);
    }

    public function show(MataKuliah $mataKuliah)
    {
        return $mataKuliah;
    }

    public function update(Request $request, MataKuliah $mataKuliah)
    {
        $mataKuliah->update($request->all());
        return response()->json($mataKuliah, 200);
    }

    public function destroy(MataKuliah $mataKuliah)
    {
        $mataKuliah->delete();
        return response()->json(null, 204);
    }
}
