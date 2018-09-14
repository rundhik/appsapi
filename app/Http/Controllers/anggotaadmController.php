<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\anggotaadm;
use App\wilayah;
use App\kelompok;

class anggotaadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotaadms = anggotaadm::all();
        return view('anggotaadm.index', ['anggotaadms' => $anggotaadms]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $w = $this->getwilayah();
        $k = kelompok::all();

        return view('anggotaadm.create', compact('w','k'));
    }
    public function getwilayah(){
        $w = wilayah::all();
        // var_dump($s) or die();
        return $w;
    }
    public function getkelompok($z){
        $k = kelompok::where('wilayah',$z)->get();

        $kel = array();
        foreach ($k as $klm) {
            $kel += array($klm->id => $klm->nama_kelompok);
        }
        // var_dump($kel) or die();
        // return view('admin.showanggota', compact('k'));
        return response()->json($kel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $nama=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $nama);
         }

        $anggotaadm= new \App\anggotaadm;
        $anggotaadm->no_anggota=$request->get('no_anggota');
        $anggotaadm->nama=$request->get('nama');
        $anggotaadm->jenis_kelamin=$request->get('jenis_kelamin');
        $anggotaadm->tempat_lhr=$request->get('tempat_lhr');
        $anggotaadm->tanggal_lhr=$request->get('tanggal_lhr');
        $anggotaadm->dusun=$request->get('dusun');
        $anggotaadm->desa=$request->get('desa');
        $anggotaadm->no_regristasi=$request->get('no_regristasi');
        $anggotaadm->wilayah=$request->get('wilayah');
        $anggotaadm->kelompok=$request->get('kelompok');
        
        $anggotaadm->save();
        
        return redirect('anggotaadms')->with('success', 'Information has been added');
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
     * @param  \App\anggotaadm  $anggotaadm
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggotaadm $anggotaadm)
    {
     return view('anggotaadm.edit', compact('anggotaadm'));
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
        $anggotaadm= \App\anggotaadm::find($id);
        $anggotaadm->no_anggota=$request->get('no_anggota');
        $anggotaadm->nama=$request->get('nama');
        $anggotaadm->jenis_kelamin=$request->get('jenis_kelamin');
        $anggotaadm->tempat_lhr=$request->get('tempat_lhr');
        $anggotaadm->tanggal_lhr=$request->get('tanggal_lhr');
        $anggotaadm->dusun=$request->get('dusun');
        $anggotaadm->desa=$request->get('desa');
        $anggotaadm->no_regristasi=$request->get('no_regristasi');
        $anggotaadm->wilayah=$request->get('wilayah');
        $anggotaadm->kelompok=$request->get('kelompok');
        
        $anggotaadm->save();
        
        return redirect('anggotaadms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggotaadm= \App\anggotaadm::find($id);
        
        $anggotaadm->delete();
        return redirect('anggotaadms');
    }
}
