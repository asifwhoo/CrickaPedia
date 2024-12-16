<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;
use App\Models\Stadium;
use App\Models\User;
use App\Models\Product;

class PlayerController extends Controller
{

    public function add_player_view()

    {
        return view('admin/add_player');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birthday' => 'required|date',
            'gender' => 'required|string',
            'nationality' => 'required|string|max:255',
            'batting_style' => 'required|string',
            'bowling_style' => 'required|string',
            'runs_odi' => 'nullable|integer',
            'runs_t20' => 'nullable|integer',
            'runs_test' => 'nullable|integer',
            'wickets_odi' => 'nullable|integer',
            'wickets_t20' => 'nullable|integer',
            'wickets_test' => 'nullable|integer',
            'best_runs' => 'nullable|string|max:255',
            'best_wickets' => 'nullable|string|max:255',
            'team_ipl' => 'required|string',
            'team_bpl' => 'required|string',
            'team_cpl' => 'required|string',
            'description' => 'nullable|string|max:1000',
        ]);

        Player::create($request->all());

        return redirect('/add_player/view');
    }


    public function view(){


        $total_sta = Stadium::count();

        $total_user = User::count();
        $total_product = Product::count();

        
        return view('admin/admindashboard2',compact('total_sta','total_user','total_product'));

        


    }
}
