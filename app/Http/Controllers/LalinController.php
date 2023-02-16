<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LalinController extends Controller
{
    public function index()
    {
        $query = DB::table('cctv')->where('status', 1)->get();
        $query2 = $query;
        $VMS = DB::table('vms')->where('status', 1)->get();
        $VMS2 = $VMS;
        // $query = $this->getLocations();
        $tittle = "Home";
        return view('LalinRealtime', compact('query', 'query2' , 'VMS', 'VMS2' , 'tittle'));
    }

   

}

