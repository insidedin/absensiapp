<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        return view ('absensi.index');
    }

    public function create()
    {
        return view ('absensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'keterangan'=>'required|in:Hadir,Izin,Cuti',
            'tanggal'=>'required|date'
        ]);

        Absensi::create($request->all());
        return redirect()->route('absensi.index');
    }
}
