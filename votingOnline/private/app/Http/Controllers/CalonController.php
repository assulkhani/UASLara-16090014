<?php

namespace App\Http\Controllers;

use App\Calon;
use Illuminate\Http\Request;

class CalonController extends Controller
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
      $calon=Calon::where('status', '1')->get();
      return view('projek.input_data_calon', compact('calon'));
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
      $calon = new Calon();
      $calon->nik=$request->nik;
      $calon->foto=$request->file('foto')->store('calon');
      $calon->nama=$request->nama;
      $calon->deskripsi=$request->deskripsi;
      $calon->pendidikan=$request->pendidikan;
      $calon->pengalaman=$request->pengalaman;
      $calon->keterangan=$request->keterangan;
      $calon->save();

      //dd($request->all());
      return redirect()->route('calon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function show(Calon $calon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $calon=Calon::find($id);
      return view('projek.edit_data_calon', compact('calon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $calon = Calon::find($id);
      if ($request->foto=='') {
        $calon->foto=$request->old_foto;
      }else {
        $calon->foto=$request->file('foto')->store('calon');
      }

      $calon->nama=$request->nama;
      $calon->deskripsi=$request->deskripsi;
      $calon->pengalaman=$request->pengalaman;
      $calon->keterangan=$request->keterangan;
      $calon->update();
      return redirect()->route('calon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calon  $calon
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $calon = Calon::find($id);
      $calon->update(["Status"=>'0']);
      return redirect()->route('calon');
    }
}
