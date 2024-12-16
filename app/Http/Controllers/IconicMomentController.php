<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Stadium;
use App\Models\IconicMoment;

class IconicMomentController extends Controller
{
    public function add_iconic_view()
    {
        return view('admin/add_iconic');
    }

    public function store(Request $request)
    {
        $request->validate([
            'iconic_name' => 'required|string|max:255',
            'player_name' => 'required|string|max:255',
            'date' => 'required|date',
            'history' => 'nullable|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('picture')) {
            $fileName = time() . '.' . $request->picture->extension();
            $request->picture->move(public_path('images/iconic_moments'), $fileName);
            $data['picture'] = $fileName;
        }

        IconicMoment::create($data);

        return redirect('/add_iconic/view');
    }

    public function iconic_view()
    {
        $total_sta = Stadium::count();

        $total_user = User::count();

        $total_product = Product::count();
        
        return view('admin/admindashboard2',compact('total_sta','total_user','total_product'));
        
    }


    public function see_iconic(){

        $iconic_data = IconicMoment::all();

        return view('see_iconic',compact('iconic_data'));
    }


    public function destroy($id)
{
    $iconic = IconicMoment::findOrFail($id);
    
   
    if ($iconic->picture && file_exists(public_path('images/iconic_moments/' . $iconic->picture))) {
        unlink(public_path('images/iconic_moments/' . $iconic->picture));
    }

    $iconic->delete();

   return redirect('/see_iconic2');
}

public function see_iconic2(){


    $iconic_data = iconicMoment::all();

    return view('admin/see_iconic2',compact('iconic_data'));
}


}
