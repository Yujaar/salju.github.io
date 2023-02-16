<?php

namespace App\Http\Controllers;

use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class VMSController extends Controller
{
    public function index()
    {
        $VMS = DB::table('vms')->where('status', 1)->get();
        $VMS2 = $query;
        // $query = $this->getLocations();
        $tittle = "Home";
        return view('Home', compact('query', 'query2' , 'tittle'));
    }

    public function getLocations($cond='')
    {
        // $sql = 'SELECT cctv.id, cctv.lokasi,cctv.`status`, cctv.http_link FROM cctv WHERE status = 1 '.$cond ;
        // $query = DB::connection('mysql')->select($sql);

       
        // dd($query);
        // $tittle = "Home";
        // return view('Home', compact('query', 'tittle')); 
        
    }

}

