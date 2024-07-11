<?php

namespace App\Http\Controllers;

use App\Models\Ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RuanganController extends Controller
{
    public function index()
    {
        $ruangans = Ruangan::all();
        $title = 'Ruangan';
        return view('pages.ruangan.index', compact('title', 'ruangans'));
    }

    public function create()
    {
        $title = 'Tambah Ruangan';
        return view('pages.ruangan.create', compact('title'));
    }
    public function edit($id)
    {
        $data = Ruangan::findOrFail($id);
        $title = 'Edit Ruangan';
        return view('pages.ruangan.edit', compact('title', 'data'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'nama' => 'required',
        //     'foto' => 'required',
        //     'deskripsi' => 'required',
        // ]);

        $file = $request->file('foto');
        $fileName = time() . '_' . $file->getClientOriginalName();
        Storage::disk('public')->putFileAs('images', $file, $fileName);

        $saveRuangan = Ruangan::create([
            'nama' => $request->nama,
            'foto' => $fileName,
            'deskripsi' => $request->deskripsi,
            'status' => '0',
        ]);

        $saveRuangan->save();

        if ($saveRuangan) {
            return redirect('ruangan')->with('success', 'Data ruangan berhasil ditambahkan');
        }
    }

    public function update(Request $request, $id)
    {
        $ruangan = Ruangan::findOrFail($id);

        if ($request->hasFile('foto')) {

            if (Storage::disk('public')->exists('images/' . $ruangan->foto)) {
                Storage::disk('public')->delete('images/' . $ruangan->foto);
                $file = $request->file('foto');
                $fileName = time() . '_' . $file->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $file, $fileName);
            } else {
                $file = $request->file('foto');
                $fileName = time() . '_' . $file->getClientOriginalName();
                Storage::disk('public')->putFileAs('images', $file, $fileName);
            }

        }else{
            $fileName = $ruangan->foto;
        }

        $updateRuangan = $ruangan->update([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'foto' => $fileName,
        ]);

        if ($updateRuangan) {
            return redirect('ruangan')->with('success', 'Data ruangan berhasil diubah');
        }
    }

    public function destroy($id)
    {
        $ruangan = Ruangan::findOrFail($id);

        Storage::disk('public')->delete('images/' . $ruangan->foto);
        
        $deleteRuangan = $ruangan->delete();

        if ($deleteRuangan) {
            return redirect('ruangan')->with('success', 'Data ruangan berhasil dihapus');
        }
    }
}
