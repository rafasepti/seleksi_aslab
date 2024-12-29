<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Kaprodi;
use App\Models\Prodi;
use App\Models\WakilRektorI;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dosen.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $dosen = Dosen::with('user')->get()->map(function ($item) {
                return [
                    'nidn' => $item->nidn,
                    'nama' => $item->nama,
                    'prodi' => $item->prodi,
                    'hak_akses' => $item->user->hak_akses,
                    'jabatan' => 'Dosen',
                ];
            });
            
            $kaprodi = Kaprodi::with('user')->get()->map(function ($item) {
                return [
                    'nidn' => $item->nidn,
                    'nama' => $item->nama,
                    'prodi' => $item->prodi,
                    'hak_akses' => $item->user->hak_akses,
                    'jabatan' => 'Kaprodi',
                ];
            });
            
            $rektor = WakilRektorI::with('user')->get()->map(function ($item) {
                return [
                    'nidn' => $item->nidn,
                    'nama' => $item->nama,
                    'prodi' => $item->prodi,
                    'hak_akses' => $item->user->hak_akses,
                    'jabatan' => 'Rektor',
                ];
            });
            $data = $dosen->merge($kaprodi)->merge($rektor);

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $editUrl = route('dosen.update', $data->id);
                    $deleteUrl = route('dosen.destroy', $data->id);
                    return '
                    <a href="'. $editUrl .'" class="btn btn-info btn-sm">
                            Edit
                    </a>
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
        $prodi = Prodi::all();
        return view('admin.dosen.create', compact('prodi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
