<?php

namespace App\Http\Controllers;

use App\Models\monitorCoins;
use App\Models\monitorPlastics;
use App\Models\monitorTincans;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function selectLastPlastic(){
        $result1 = monitorPlastics::latest()->first();   
        $plasticweight = $result1->total_kg; 
        $plastic = $plasticweight * 0.1;

        $result2 = monitorTincans::latest()->first();   
        $cansweight = $result2->total_kg; 
        $tincans = $cansweight * 0.1;

        $result3 = monitorCoins::latest()->first();   
        $currentCoins = $result3->coins_total; 
        $coins = $currentCoins / 200;
        
        return view('dashboard', compact('plastic' ,'tincans','coins'));
        

    }
}
