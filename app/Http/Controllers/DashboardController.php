<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard_view()
    {

        $apiData = Http::post('https://api.cricapi.com/v1/matches?apikey=a5f30859-0f3e-4cd1-9496-b336fd765ba5&offset=0', [
            'apikey' => '60b39318-1076-41a6-89cb-9e2761c6de6c',
            'offset' => 0,
        ])->json();
            
        

        return view('dashboard', ['data' => $apiData]);

    }
}
