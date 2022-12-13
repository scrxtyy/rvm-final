<?php

namespace App\Http\Controllers;

use App\Models\monitorCoins;
use App\Models\monitorPlastics;
use App\Models\monitorTincans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogController extends Controller
{
    public function plasticsTable(){
        
        $result1 = monitorPlastics::latest()->first();   
        $plastictotal = $result1->total_kg; 

        $plasticsLog = monitorPlastics::all();
        return view('monitor/petbottles', compact('plasticsLog','plastictotal'));
    }

    public function cansTable(){
        
        $result2 = monitorTincans::latest()->first();   
        $canstotal = $result2->total_kg; 

        $cansLog = monitorTincans::all();
        return view('monitor/tincans', compact('cansLog','canstotal'));
    }

    public function coinsTable(){
        
        $result2 = monitorCoins::latest()->first();   
        $coinstotal = $result2->coins_total; 

        $coinsLog = monitorCoins::all();
        return view('monitor/coins', compact('coinsLog','coinstotal'));
    }
}
