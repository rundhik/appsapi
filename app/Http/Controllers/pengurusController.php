<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\sapi;
use App\anggotaadm;
use App\sapiadm;

class pengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $get = sapi::all();
        $jumlah = $get->count();
        $betina = $get->where('jenis_kelamin',0)->count();
        $jantan = $get->where('jenis_kelamin',1)->count();

        $orang = anggotaadm::all();
        $total = $orang->count();
        
        return view('pengurus.index', compact('jumlah','betina','jantan', 'total'));
    }

     public function anggota()
    {
     
        $anggota = anggotaadm::all();

        $sapiadms = sapiadm::all();
        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('pengurus.anggota', compact('anggota','sapiadms'));    
    }

    

    public function sapi()
    {
     
      $anggota = anggotaadm::all();

        $sapiadms = sapiadm::all();
        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('pengurus.sapi', compact('anggota','sapiadms'));    
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
        //
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

    public function detail($id)
    {
     
        $anggota = anggotaadm::all()->where('id', $id);

        $sapiadms = sapiadm::all();
        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('pengurus.detail', compact('anggota','sapiadms'));    
    }

    public function detailsapi($id)
    {
             $anggota = anggotaadm::all()->where('id', $id);        
        $s = sapi::all()->where('id_anggota', $id);
        $c = $s->count('id');        
        $b = $s->where('jenis_kelamin',0);
        $j = $s->where('jenis_kelamin',1);

        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('pengurus.detailsapi', compact('anggota','s','c','b','j'),['s'=>$s]);    
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
