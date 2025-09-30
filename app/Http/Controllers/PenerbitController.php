<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_penerbit = DB::table('penerbit')->orderBy('penerbit', 'ASC')->get();
        $jumlah_data = DB::table('penerbit')
            ->select('penerbit', DB::raw('COUNT(penerbit) as jumlah_penerbit'))
            ->groupBy('penerbit')->get();

        return view('penerbit.tampil', [
            'PenerbitBuku' => $data_penerbit,
            'JumlahPenerbitBuku' => $jumlah_data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penerbit' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        DB::table('penerbit')->insert([
            'penerbit' => $request->penerbit,
            'alamat' => $request->alamat
        ]);
        return redirect('/penerbit')->with('success', 'Data penerbit berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $penerbit = DB::table('penerbit')->where('id_penerbit', $id)->first();
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data_penerbit = DB::table('penerbit')->where('id_penerbit', $id)->first();
        return view('penerbit.edit', ['PenerbitBuku' => $data_penerbit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dataPenerbit = array(
'penerbit' => $request->penerbit,
'alamat' => $request->alamat
);

$data_penerbit = DB::table('penerbit')->where('id_penerbit',$id)
->update($dataPenerbit);
return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       DB::table('penerbit')->where('id_penerbit',$id)->delete();
return redirect('/penerbit');
    }
}