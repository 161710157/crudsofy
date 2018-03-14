<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Dokter;
use Session;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $psn = Pasien::with('Dokter')->get();
        return view('pasien.index',compact('psn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokter = Dokter::all();
        return view('pasien.create',compact('dokter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required|',
            'nip' => 'required|unique:pasiens',
            'dokter_id' => 'required'
        ]);
        $psn = new Pasien;
        $psn->nama = $request->nama;
        $psn->nip = $request->nip;
        $psn->dokter_id = $request->dokter_id;
        $psn->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$psn->nama</b>"
        ]);
        return redirect()->route('pasien.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $psn = Pasien::findOrFail($id);
        return view('pasien.show',compact('psn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $psn = Pasien::findOrFail($id);
        $dokter = Dokter::all();
        $selectedDokter = Pasien::findOrFail($id)->dokter_id;
        return view('pasien.edit',compact('psn','dokter','selectedDokter'));
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
        $this->validate($request,[
            'nama' => 'required|',
            'nip' => 'required|',
            'dokter_id' => 'required'
        ]);
        $psn = Pasien::findOrFail($id);
        $psn->nama = $request->nama;
        $psn->nip = $request->nip;
        $psn->dokter_id = $request->dokter_id;
        $psn->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$psn->nama</b>"
        ]);
        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Pasien::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('pasien.index');
    }
}
