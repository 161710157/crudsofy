<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;
use App\Ortu;
use Session;
class OrtuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ortu = Ortu::with('Pasien')->get();
        return view('ortu.index',compact('ortu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $psn = Pasien::all();
        return view('ortu.create',compact('psn'));
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
            'umur' => 'required|',
            'pasien_id' => 'required|unique:ortus'
        ]);
        $ortu = new Ortu;
        $ortu->nama = $request->nama;
        $ortu->umur = $request->umur;
        $ortu->pasien_id = $request->pasien_id;
        $ortu->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan <b>$ortu->nama</b>"
        ]);
        return redirect()->route('ortu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ortu = Ortu::findOrFail($id);
        return view('ortu.show',compact('ortu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ortu = Ortu::findOrFail($id);
        $psn = Pasien::all();
        $selectedPsn = Ortu::findOrFail($id)->pasien_id;
        return view('ortu.edit',compact('psn','ortu','selectedPsn'));
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
            'umur' => 'required|',
            'pasien_id' => 'required'
        ]);
        $ortu = Ortu::findOrFail($id);
        $ortu->nama = $request->nama;
        $ortu->umur = $request->umur;
        $ortu->pasien_id = $request->pasien_id;
        $ortu->save();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil mengedit <b>$ortu->nama</b>"
        ]);
        return redirect()->route('ortu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Ortu::findOrFail($id);
        $a->delete();
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Data Berhasil dihapus"
        ]);
        return redirect()->route('ortu.index');
    }
}
