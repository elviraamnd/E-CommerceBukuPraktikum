<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::latest()->paginate(5);
        return view('buku.index', compact('bukus'));
    }

    public function create()
    {
        $kategoriii = Kategori::all();
        return view('buku.create', compact('kategoriii'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
        'image'     => 'required|image|mimes:png,jpg,jpeg',
        'judul'     => 'required',
        'kategori_id'     => 'required',
        'stok'     => 'required',
        'harga'   => 'required',
        'deskripsi'     => 'required'
        ]);

        //upload image
     $image = $request->file('image');
     $image->storeAs('public/bukus', $image->hashName());
        // dd($request->harga);
        $buku = Buku::create([
        'image'     => $image->hashName(),
        'judul'     => $request->judul,
        'kategori_id'     => $request->kategori_id,
        'stok'     => $request->stok,
        'harga'   => $request->harga,
        'deskripsi'     => $request->deskripsi
     ]);

     if($buku){
        //redirect dengan pesan sukses
        return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Disimpan!']);
     }else{
        //redirect dengan pesan error
        return redirect()->route('buku.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Buku $buku)
    {
        $kategoriii = Kategori::all();
        return view('buku.edit', compact('buku', 'kategoriii'));
    }

    public function update(Request $request, Buku $buku)
    {
        $this->validate($request, [
        'judul'     => 'required',
        'kategori_id'     => 'required',
        'stok'     => 'required',
        'harga'   => 'required',
        'deskripsi'     => 'required'
        ]);

        $buku = Buku::findOrFail($buku->id);

        if($request->file('image') == "") {

            $buku->update([
                'judul'     => $request->judul,
                'kategori_id'     => $request->kategori_id,
                'stok'     => $request->stok,
                'harga'   => $request->harga,
                'deskripsi'     => $request->deskripsi
                
            ]);

        } else {

            //hapus old image
            Storage::disk('local')->delete('public/bukus/'.$buku->image);

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/bukus', $image->hashName());

            $buku->update([
                'image'     => $image->hashName(),
                'judul'     => $request->judul,
                'kategori_id'     => $request->kategori_id,
                'stok'     => $request->stok,
                'harga'   => $request->harga,
                'deskripsi'     => $request->deskripsi
            ]);
            
        }

        if($buku){
            //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        if($buku){
            //redirect dengan pesan sukses
            return redirect()->route('buku.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('buku.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
