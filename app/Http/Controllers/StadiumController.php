<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stadium;
use App\Models\User;
Use App\Models\Product;

class StadiumController extends Controller
{
    public function add_stadium_view()
    {
        return view('admin/add_stadium');
    }

    public function store(Request $request)
    {
        $request->validate([
            'stadium_name' => 'required|string|max:255',
            'establishment' => 'required|date',
            'location' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'stadium_history' => 'nullable|string|max:1000',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $fileName = time() . '.' . $request->picture->extension();  
            $request->picture->move(public_path('images/stadiums'), $fileName);
            $data['picture'] = $fileName;
        }

        Stadium::create($data);

        return redirect('/add_stadium/view');
    }

    public function view()
    {
        $total_sta = Stadium::count();

        $total_user = User::count();

        $total_product = Product::count();

        
        return view('admin/admindashboard2',compact('total_sta','total_user','total_product'));
        
    }
}