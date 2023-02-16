<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Whatsapp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LalinController extends Controller
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $query = DB::table('cctv')->where('status', 1)->get();
        $query2 = $query;
        $VMS = DB::table('vms')->where('status', 1)->get();
        $VMS2 = $VMS;
        $current = Carbon::now();
        $today = Carbon::today();
        $cutoff = Carbon::parse('today 6am');

        if($current > $cutoff){
        $qcct1 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(current_date) and shift = 1';
        $qcct2 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(current_date) and shift = 2';
        $qcct3 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(current_date) and shift = 3 and jam in (21,22,23)';
        $qcct4 = 'select Shift, LastUpdate, 0 as lalin, 0 as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(current_date) and shift = 3 and jam in (0,1,2,3,4,5,6)';

        }else{
        $qcct1 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(DATE_ADD(current_date, INTERVAL -1 DAY)) and shift = 1';
        $qcct2 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(DATE_ADD(current_date, INTERVAL -1 DAY)) and shift = 2';
        $qcct3 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(DATE_ADD(current_date, INTERVAL -1 DAY)) and shift = 3 and jam in (21,22,23)';
        $qcct4 = 'select Shift, LastUpdate, sum(lalinent+lalinext) lalin, sum(Pendapatan) as pen from rt_lalin_perjam_shift where IdCabang = 62 and Tanggal = DATE(current_date) and shift = 3 and jam in (0,1,2,3,4,5,6)';
        }
        $qcct1 = DB::connection('mysql2')->select($qcct1);
        $qcct2 = DB::connection('mysql2')->select($qcct2);
        $qcct3 = DB::connection('mysql2')->select($qcct3);
        $qcct4 = DB::connection('mysql2')->select($qcct4);
        // dd($qcct3);
        $tittle = "Home";
        return view('Home', compact('query', 'query2' , 'VMS', 'VMS2' ,'qcct1','qcct3','qcct4','qcct2', 'tittle'));
    }

}



