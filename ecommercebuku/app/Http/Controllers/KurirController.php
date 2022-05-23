<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kurir;

class KurirController extends Controller
{
    public function index()
    {
        $kurirs = Kurir::latest()->paginate(5);
        return view('kurir.index', compact('kurirs'));
    }
    
    public function create()
    {
        return view('kurir.create');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'     => 'required',
            'telepon'     => 'required',
            'alamat'     => 'required'
        ]);
    
    
        $kurir = Kurir::create([
            'nama'     => $request->nama,
            'telepon'     => $request->telepon,
            'alamat'     => $request->alamat

        ]);
    
        if($kurir){
            //redirect dengan pesan sukses
            return redirect()->route('kurir.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('kurir.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Kurir $kurir)
    {
        $kurirrr = Kurir::find($kurir);
        return view('kurir.edit', compact('kurir'));
    }

    public function update(Request $request, Kurir $kurir)
    {

        $request->validate([
            'nama'     => 'required',
            'telepon'     => 'required',
            'alamat'     => 'required'
        ]);

        $kurir->update([
            'nama'     => $request->nama,
            'telepon'     => $request->telepon,
            'alamat'     => $request->alamat
        ]);

        return redirect()->route('kurir.index')->with(['success' => 'Data Berhasil Diperbarui!']); 
    }

    public function destroy($id)
    {
        $kurirr = Kurir::find($id);
        $kurirr->delete();
        return redirect()->route('kurir.index')->with(['success' => 'Data Berhasil Dihapus!']); 

    } 
}
