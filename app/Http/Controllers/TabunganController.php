<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use App\Models\tabungan;
use Illuminate\Http\Request;

class TabunganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tabungan = tabungan::all();
        return view('tabungan.index', compact('tabungan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tabungan = tabungan::all();
        $siswa = siswa::all();
        return view('tabungan.create', compact('tabungan', 'siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'jumlah' => 'required',
            'tanggal' => 'required',
            'id_siswa' => 'required',
        ]);

        $tabungan = new tabungan();
        $tabungan->jumlah = $request->jumlah;
        $tabungan->tanggal = $request->tanggal;
        $tabungan->id_siswa = $request->id_siswa;
        $tabungan->save();
        return redirect()->route('tabungan.index')
        ->with('success', 'Data Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tabungan = tabungan::findorfail($id);
        return view('tabungan.show', compact('tabungan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tabungan = tabungan::findorfail($id);
        $siswa = siswa::all();
        return view('tabungan.edit', compact('tabungan', 'siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'jumlah' => 'required',
            'tanggal' => 'required',
            'id_siswa' => 'required',
        ]);

        $tabungan = tabungan::findorfail($id);
        $tabungan->jumlah = $request->jumlah;
        $tabungan->tanggal = $request->tanggal;
        $tabungan->id_siswa = $request->id_siswa;
        $tabungan->save();
        return redirect()->route('tabungan.index')
        ->with('success', 'Data Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tabungan = tabungan::findOrFail($id);
        $tabungan->delete();

        return redirect()->route('tabungan.index')
        ->with('success', 'data berhasil di hapus');
    }
}
