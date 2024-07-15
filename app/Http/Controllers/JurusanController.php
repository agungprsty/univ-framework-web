<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        return Jurusan::all();
    }

    public function store(Request $request)
    {
        $jurusan = Jurusan::create($request->all());
        return response()->json($jurusan, 201);
    }

    public function show(Jurusan $jurusan)
    {
        return $jurusan;
    }

    public function update(Request $request, Jurusan $jurusan)
    {
        $jurusan->update($request->all());
        return response()->json($jurusan, 200);
    }

    public function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return response()->json(null, 204);
    }
}
