<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = Karyawan::all();
        return view ('karyawan.index', compact('karyawan'));
    }

    public function create()
    {
        return view ('karyawan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan'=>'required',
            'status'=>'required|in:Tetap,Kontrak',
            'gaji'=>'required'
        ]);

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Data Jabatan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $jabatan = Karyawan::findOrFail($id);
        return view ('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan'=>'required',
            'status'=>'required|in:Tetap,Kontrak',
            'gaji'=>'required'
        ]);

        $jabatan = Karyawan::findOrFail($id);
        $jabatan->update($request->all());
        return redirect()->route('karyawan.index')->with('success', 'Data Jabatan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $jabatan = Karyawan::findOrFail($id);
        $jabatan->delete();
        return redirect()->route('karyawan.index')->with('success', 'Data Jabatan berhasil dihapus!');
    }
}
