<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\admin;
use App\ketua;
use App\pengurus;
use App\koordinator;
use App\sapiadm;

class login extends Controller
{
    function masuk(Request $kiriman){
    	$data1= admin::where('username', $kiriman->username)->where('password', $kiriman->password)->get();
    	$data2= ketua::where('username', $kiriman->username)->where('password', $kiriman->password)->get();
    	$data3= pengurus::where('username', $kiriman->username)->where('password', $kiriman->password)->get();
    	$data4= koordinator::where('username', $kiriman->username)->where('password', $kiriman->password)->get();

    	if (count($data1)>0) {
    		Auth::guard('admin')->LoginUsingId($data1[0]['id']);    
    		return redirect('admins');
    		
    	} else if (count($data3)>0){
    		Auth::guard('pengurus')->LoginUsingId($data3[0]['id']);
    		return redirect('pengurus');

    	} else if (count($data4)>0){
            Auth::guard('koordinator')->LoginUsingId($data4[0]['id']);
            return redirect('koordinator/'.$data4[0]['id']);    

    	} else if (count($data2)>0){
            Auth::guard('ketua')->LoginUsingId($data2[0]['id']);
            return redirect('ketua/'.$data2[0]['id']);    

        } else { 
            return redirect('/');
        }
    }

    function keluar(){
    	if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}
    	else if (Auth::guard('ketua')->check()) {
    		Auth::guard('ketua')->logout();
       	} 
       	else if (Auth::guard('pengurus')->check()) {
    		Auth::guard('pengurus')->logout();
    	}
    	else if (Auth::guard('koordinator')->check()) {
    		Auth::guard('koordinator')->logout();
    	}
    	return redirect('/');
    }
}
