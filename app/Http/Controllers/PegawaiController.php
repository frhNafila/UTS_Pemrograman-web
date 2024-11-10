<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawais = Pegawai::paginate(100);
        return view('pegawai.index',[
            'pegawais' => $pegawais
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lastPegawai = Pegawai::latest('id')->first();
        $nextId = $lastPegawai ? $lastPegawai->id + 1 : 1;
        return view('pegawai.create', compact('nextId'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required|string|max:255',  
            'address'=> 'required|string|max:255',
            'date'=> 'required|date',
            'jabatan' => 'required|string|max:255',
        ]);
   

        Pegawai::create([
            'name' => $request->name,
            'address' => $request->address,
            'date' => $request->date,
            'jabatan'=>$request->jabatan,
        ]);
        return redirect('/pegawai')->with('status','Pegawai Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit',compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data jika diperlukan
        $request->validate([
            'name'=> 'required|string|max:255',  
            'address'=> 'required|string|max:255',
            'date'=> 'required|date',
            'jabatan' => 'required|string|max:255',
        ]);
    
        // Cari pegawai berdasarkan ID
        $pegawai = Pegawai::findOrFail($id);
    
        // Update data menggunakan metode update()
        $pegawai->update([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'date' => $request->input('date'),
            'jabatan' => $request->input('jabatan'),

        ]);
    
        // Redirect atau berikan respons
        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil diperbarui.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete(); // Hapus data pegawai

        return redirect()->route('pegawai.index')->with('success', 'Data pegawai berhasil dihapus.');
    }
}
