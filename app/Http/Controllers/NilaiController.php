<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use App\Models\nilai;
use App\Models\Siswa;
use App\Models\Tugas;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan seluruh data nilai
        $nilai = nilai::orderBy('id', 'DESC')->get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ar_nilai = nilai::all();
        $ar_guru = Guru::all();
        $ar_tugas = Tugas::all();
        $ar_siswa = Siswa::all();
        return view('nilai.form_nilai', compact('ar_nilai', 'ar_guru', 'ar_tugas', 'ar_siswa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nilai' => 'required|unique:nilai|max:11',
            'perihal' => 'required',
            'guru_id' => 'required |Integer',
            'tugas_id' => 'required |Integer',
            'siswa_id' => 'required |Integer',
        ]);

        // ------------apakah user  ingin upload foto-----------
        // yang diedit novia new

        //lakukan insert data dari request form
        DB::table('nilai')->insert(
            [

                'nilai' => $request->nilai,
                'perihal' => $request->perihal,
                'guru_id' => $request->guru_id,
                'tugas_id' => $request->tugas_id,
                'siswa_id' => $request->siswa_id,
                'created_at' => now()

            ]
        );

        return redirect()->route('/nilai')
            ->with('success', 'Data nilai Baru Berhasil Disimpan');
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

    //=================================  Novia Update =======================================
    public function edit($id)
    {
        //
        $data = DB::table('nilai')->where('id', '=', $id)->get();
        return view('nilai.form_edit_nilai', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //======================================== Novia Update ==================================
    public function update(Request $request, $id)
    {
        DB::table('nilai')->where('id', '=', $id)->update(
            [
                'nilai' => $request->nilai,
                'perihal' => $request->perihal,
                'guru_id' => $request->guru_id,
                'tugas_id' => $request->tugas_id,
                'siswa_id' => $request->siswa_id,
                'created_at' => now()
            ]
        );
        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = nilai::find($id);
        nilai::where('id', $id)->delete();
        return redirect()->route('nilai.index')
            ->with('success', 'Data nilai Berhasil Dihapus');
    }
}
