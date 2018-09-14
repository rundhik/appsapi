<?php

namespace App\Http\Controllers;

use App\sapiadm;
use App\sapi;
use App\anggotaadm;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use HelperClass;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\input;

class SapiadmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        // $sapiadms = sapiadm::select(\DB::raw('count(*) status'))->where('status', 'hidup')->groupBy('id_anggota')->get();
        //$sapiadms = DB::table('sapi')->count();

        //$sapiadms = sapiadm::SELECT(\DB::raw('COUNT(*)'))->whereColumn([['id_anggota', '=', 6], ['status', '=', 'qef']])->groupBy('id_anggota')->get();
        $sapiadms = sapiadm::all();
        $sapi = sapi::all();
         // $anggotaadm = anggotaadm::all();
        return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        

    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sapiadm.create');    }

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
        
        return redirect('sapiadms/'.$sapi->id_anggota)->with('success', 'Information has been added');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sapiadm  $sapiadm
     * @return \Illuminate\Http\Response
     */
    public function show($x)
    {  

        $a = anggotaadm::all()->where('id', $x);
        $s = sapi::all()->where('id_anggota', $x);
        $c = $s->count('id');        
        $b = $s->where('jenis_kelamin',0);
        $j = $s->where('jenis_kelamin',1);
        
        return view('sapiadm.show',compact('a','s','c','b','j'),['s'=>$s]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sapiadm  $sapiadm
     * @return \Illuminate\Http\Response
     */
    public function edit($id_anggota,$id_sapi)
    {
        $s = sapi::all()->where('id', $id_sapi);
        $a = anggotaadm::all()->where('id', $id_anggota);
        // var_dump($a) or die();
        return view('sapiadm.edit', compact('s','a'));
      }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sapiadm  $sapiadm
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request ,$id_sapi)
    public function update(Request $request)
    {  
        //update ajax
        // $s = \Input::get('data');
        // var_dump($s) or die();
        //end update ajax

        //update halaman biasa
        $s = sapi::where('id', $request->id)->update([
            'id_anggota' => $request->id_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tipe_sapi' => $request->tipe_sapi,
            'eartag'=> $request->eartag,
            'fase' => $request->fase,
            'status' => $request->status
            ]);
        //end update halaman biasa
        return redirect('sapiadms/'.$request->id_anggota);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sapiadm  $sapiadm
     * @return \Illuminate\Http\Response
     */
    public function destroy(sapiadm $sapiadm)
    {
        //
    }
}
