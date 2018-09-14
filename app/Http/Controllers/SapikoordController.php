<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\sapi;
use App\sapiadm;
use App\anggotaadm;
use App\koordinator;

class SapikoordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sapiadms = sapiadm::all();
        $sapi = sapi::all();
        // $k = koordinator::find($x);
         // $anggotaadm = anggotaadm::all();
        return view('sapikoord.index', compact('sapiadms', 'sapi'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

        $sapi= new \App\sapi;
        $sapi->id_anggota=$request->get('id_anggota'); 
        $sapi->tipe_sapi=$request->get('tipe_sapi');
        $sapi->jenis_kelamin=$request->get('jenis_kelamin');
        $sapi->fase=$request->get('fase');
        $sapi->eartag=$request->get('eartag');
        $sapi->status=$request->get('status');
        $sapi->kelompok=$request->get('kelompok');
        $sapi->wilayah=$request->get('wilayah');
        
        $sapi->save();
        
        return redirect('koordinator/{{$k->id}}')->with('success', 'Information has been added');  
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
