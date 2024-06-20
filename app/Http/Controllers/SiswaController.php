<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = siswa::all();
        return view('siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required',
            'kelas' => 'required'
        ]);

        $siswa = new siswa();
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return redirect()->route('siswa.index')
        ->with('success', 'Data Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $siswa = siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = siswa::findorfail($id);
        return view('siswa.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'kelas' => 'required',
        ]);

        $siswa = siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect()->route('siswa.index')
        ->with('success', 'data berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(siswa $siswa, $id)
    {
        $siswa = siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('siswa.index')
        ->with('success', 'data berhasil di hapus');
    }
}
