<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orangtua;
use App\anak;

class MyController extends Controller
{
    //
    public function index()
    {
    	$a = "Rahmad Firdaus";
    	return "Annyeonghaseyo Naneun <b>".$a."</b>";
    }

    public function tampilan()
    {
    	return view('about');
    }

    public function tampilanmodelortu()
    {
    	$ortu = orangtua::all();
    	return view('aboutortu',compact('ortu'));
    }

    public function tampilanmodelanak()
    {
    	$anak = anak::all();
    	return view('aboutanak',compact('anak'));
    }

    public function tampilanmodel()
    {
    	$ortu = orangtua::all();
    	$anak = anak::all();
    	return view('about',compact('ortu','anak'));
    }
}
