<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use App\Http\Requests\StoreProdiRequest;
use App\Http\Requests\UpdateProdiRequest;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodi = Prodi::all();
        return view('admin.prodi.index', compact('prodi'));
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $prodi = Prodi::all();
            return DataTables::of($prodi)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $editUrl = route('prodi.update', $data->id);
                    $deleteUrl = route('prodi.destroy', $data->id);
                    return '
                      <button 
                        class="btn btn-info btn-sm" 
                        data-bs-toggle="modal" 
                        data-bs-target="#updateModal" 
                        data-url="' . $editUrl . '" 
                        data-nama_prodi="' . htmlspecialchars($data->nama_prodi, ENT_QUOTES, 'UTF-8') . '">
                        Edit
                    </button>
                    <form action="' . $deleteUrl . '" method="POST" style="display: inline;">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Apakah anda yakin?\')">Hapus</button>
                    </form>
                ';
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.prodi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdiRequest $request)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required|string|max:255',
        ]);

        Prodi::create(['nama_prodi' => $validated['nama_prodi']]);

        // Simpan data atau lakukan sesuatu dengan $validated['nama_prodi']
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdiRequest $request, Prodi $prodi)
    {
        $validated = $request->validate([
            'nama_prodi' => 'required|string|max:255',
        ]);

        $prodi->update([
            'nama_prodi' => $validated['nama_prodi'],
        ]);

        // Simpan data atau lakukan sesuatu dengan $validated['nama_prodi']
        return redirect()->route('prodi.index')->with('success', 'Prodi berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Prodi Berhasil Dihapus!');
    }
}
