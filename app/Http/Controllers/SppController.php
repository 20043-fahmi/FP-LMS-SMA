<?php

namespace App\Http\Controllers;

use App\Models\Spp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spp = DB::table('spp')
            ->join('siswa', 'spp.siswa_id', '=', 'siswa.id')
            ->select('spp.*', 'siswa.NIS', 'siswa.nama_siswa AS nama')->get();
        return view('spp.index', compact('spp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('spp.form_spp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        DB::table('spp')->insert(
            [
                'tanggal' => $request->tanggal,
                'total' => $request->total,
                'kurang' => $request->kurang,
                'siswa_id' => $request->siswa
            ]
        );
        return redirect()->route('spp.store')
            ->with('success', 'Data Spp Baru Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('spp')->where('id', '=', $id)->get();
        return view('spp.form_edit_spp', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('spp')->where('id', '=', $id)->update(
            [
                'tanggal' => $request->tanggal,
                'total' => $request->total,
                'kurang' => $request->kurang,
                'siswa_id' => $request->siswa
            ]

        );
        return redirect('/spp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $row = Spp::find($id);
        DB::table('spp')->where('id', $id)->delete();
        return redirect()->route('spp.index')
            ->with('success', 'Data Siswa Berhasil Dihapus');
    }

    public function search_spp(Request $request)
    {   //paginate Mengatur berapa data Yang tampil Pada Halaman
        $keyword = $request->search;
        $spp = DB::table('spp')
            ->join('siswa', 'spp.siswa_id', '=', 'siswa.id')
            ->select('spp.*', 'siswa.NIS', 'siswa.nama_siswa AS nama')->where('nama_siswa', 'like', "%" . $keyword . "%")->orderBy('tanggal', 'DESC')->paginate(25);
        return view('spp.index', compact('spp'))->with('i', (request()->input('page', 1) - 1) * 25);
    }
}
