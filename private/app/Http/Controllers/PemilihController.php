<?php

namespace App\Http\Controllers;

use App\Pemilih;
use Illuminate\Http\Request;

class PemilihController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilih=Pemilih::where('status', '1')->get();
        return view('projek.input_data_pemilih', compact('pemilih'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemilih = new Pemilih();
        $pemilih->nik=$request->nik;
        $pemilih->nama=$request->nama;
        $pemilih->tempat_lahir=$request->tempat;
        $pemilih->tanggal_lahir=$request->tanggal;
        $pemilih->alamat=$request->alamat;
        $pemilih->jenis_kelamin=$request->jk;
        $pemilih->save();
        return redirect()->route('pemilih');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function show(Pemilih $pemilih)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pemilih=Pemilih::find($id);
      return view('projek.edit_data_pemilih', compact('pemilih'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $pemilih = Pemilih::find($id);
      $pemilih->nama=$request->nama;
      $pemilih->tempat_lahir=$request->tempat;
      $pemilih->tanggal_lahir=$request->tanggal;
      $pemilih->alamat=$request->alamat;
      $pemilih->jenis_kelamin=$request->jk;
      $pemilih->update();
      return redirect()->route('pemilih');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemilih  $pemilih
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pemilih = Pemilih::find($id);
        $pemilih->update(["Status"=>'0']);
        return redirect()->route('pemilih');

    }

    public function dashboard()
    {
      	return view('projek.sekilas_pandang');
    }
}
