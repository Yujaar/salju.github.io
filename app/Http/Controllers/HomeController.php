<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $tittle = "Home";
        return view('Home', compact('tittle'));
    }


    function formomax()
    {
        $tittle = "Formo Max";
        return view('/model-mobil/formo-max', compact('tittle'));
    }


    function cortezs()
    {
        $tittle = "Cortez";
        return view('/model-mobil/cortez-s', compact('tittle'));
    }


    function newcortez()
    {
        $tittle = "Nnew Cortez";
        return view('/model-mobil/new-cortez', compact('tittle'));
    }


    function almaz()
    {
        $tittle = "Almaz";
        return view('/model-mobil/almaz', compact('tittle'));
    }


    function almazrspro()
    {
        $tittle = "Almaz S PRO";
        return view('/model-mobil/almaz-rs-pro', compact('tittle'));
    }


    function airev()
    {
        $tittle = "Air EV";
        return view('/model-mobil/air-ev', compact('tittle'));
    }


    function almazhybrid()
    {
        $tittle = "Almaz Hybrid";
        return view('/model-mobil/almaz-hybrid', compact('tittle'));
    }


    function formo()
    {
        $tittle = "Formo";
        return view('/model-mobil/formo', compact('tittle'));
    }


    function confero()
    {
        $tittle = "Confero";
        return view('model-mobil/confero', compact('tittle'));
    }


    function pricelist()
    {
        $tittle = "Price List";
        return view('/pricelist', compact('tittle'));
    }


    function promowuling()
    {
        $tittle = "Promo Wuling";
        return view('/promo-wuling', compact('tittle'));
    }


    function artikel()
    {
        $tittle = "Artikel";
        return view('/artikel', compact('tittle'));
    }


}
