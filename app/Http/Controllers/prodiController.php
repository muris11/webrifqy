<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use App\Models\prodi;

class prodiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Program Studi';
        $slug = 'prodi';
        $dataProdi = prodi::all();
        return view('prodi.index', compact('title', 'slug', 'dataProdi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Tambah Data Prodi';
        $slug = 'prodi';
        $dataProdi = prodi::all();
        return view('prodi.create',compact('title', 'slug', 'dataProdi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $result = prodi::insert([
            'kd_prodi' => $request->prodi,
            'nama_prodi' => $request->nama_prodi,
            'created_at' => now(),
            'update_at' => now()
        ]);
        if($result) {
            return redirect('/prodi');
            } else {
                return $this->create();
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Perbarui Data Prodi';
        $slug = 'prodi';
        $dataProdi = prodi::all()
            ->where('kd_prodi','=', $id)
            ->first();
        return view('prodi.update',compact('title','slug','dataProdi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        prodi::where('kd_prodi', $id)
            ->update([
                'nama_prodi' => $request->nama_prodi,
                'update_at' => now()
            ]);
        
        return redirect('/prodi');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        prodi::where('kd_prodi',$id)
        ->delete();
        return redirect('/prodi');
    }
}
