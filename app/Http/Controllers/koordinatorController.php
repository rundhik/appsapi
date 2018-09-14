<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;    

use App\wilayah;
use App\koordinator;
use App\sapi;
use App\sapiadm;
use App\anggotaadm;


class koordinatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($x)
    {   
        $k = koordinator::find($x);
        $r = $k->wilayah;
        $wil = wilayah::all()->where('id', $r);

        $get = sapi::all()->where('wilayah', $r);
        $jumlah = $get->count();
        $betina = $get->where('jenis_kelamin',0)->count();
        $jantan = $get->where('jenis_kelamin',1)->count();

        $orang = anggotaadm::all()->where('wilayah', $r);
        $total = $orang->count();

        // var_dump($jantan) or die;
        return view('koordinator.index', compact('k','wil','total', 'jumlah', 'betina', 'jantan'));    
    }

    public function anggota($x)
    {
        $k = koordinator::find($x);
        $orang = anggotaadm::all()->where('wilayah', $k->wilayah);

        $sapiadms = sapiadm::all()->where('wilayah', $k->wilayah);
        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('koordinator.anggota', compact('k','orang','sapiadms'));    
    }

    public function detail($x)
    {   
        $k = koordinator::find($x);

        $anggota = anggotaadm::all()->where('wilayah', $k->wilayah);



        // var_dump($anggota)or die;



        return view('koordinator.detail', compact('k', 'anggota'));

    }

    public function sapi($x)
    {
      $k = koordinator::find($x);
        $orang = anggotaadm::all()->where('wilayah', $k->wilayah);

        $sapiadms = sapiadm::all()->where('wilayah', $k->wilayah);
        
         // $anggotaadm = anggotaadm::all();
        // return view('sapiadm.index', ['sapiadms' => $sapiadms], ['sapis' => $sapi]);    
        
        return view('koordinator.sapi', compact('k','orang','sapiadms'));    
    }

    public function detailsapi($x)
    {
        $k = koordinator::find($x);
        $anggota = anggotaadm::all()->where('wilayah', $k->wilayah);

        $sapiadms = sapiadm::all()->where('wilayah', $k->wilayah);

        $s = sapi::all()->where('wilayah', $k->wilayah);
        $c = $s->count('id');        
        $b = $s->where('jenis_kelamin',0);
        $j = $s->where('jenis_kelamin',1);
        
        return view('koordinator.detailsapi',compact('k','anggota','sapiadms','s','c','b','j'),['s'=>$s]);

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
        $agg=$request->get('id_anggota');
        $wil=$request->get('wilayah');
        // var_dump($agg, $wil) or die();
        return redirect('koordinator/'.$wil.'/sapi/'.$agg)->with('success', 'Information has been added');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($x)
    {
        $k = koordinator::find($x);
        $orang = anggotaadm::all()->where('wilayah', $k->wilayah);
        
        return view('koordinator.anggota', compact('k','orang'));   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
       public function edit($id_anggota,$id_sapi)
    {
        $s = sapi::all()->where('id', $id_sapi);
        $a = anggotaadm::all()->where('id', $id_anggota);
        // var_dump($a) or die();
        return view('koordinator.edit', compact('s','a'));
      }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       
          $s = sapi::where('id', $request->id)->update([
            'id_anggota' => $request->id_anggota,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tipe_sapi' => $request->tipe_sapi,
            'eartag'=> $request->eartag,
            'fase' => $request->fase,
            'status' => $request->status
            ]);
        //end update halaman biasa
        return redirect('koordinator/'.$request->id_anggota);
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
