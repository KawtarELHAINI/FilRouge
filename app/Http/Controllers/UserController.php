<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Annonce;
use Illuminate\Http\Request;

class UserController extends Controller
{
   

    // public function stats() 
    // {
    //     $totalcategories = Category::count();
    //     $totalannonces = Annonce::count();
    //     $totalusers = User::count();
    //     return view('admin.allannonces', compact('totalcategories','totalannonces','totalusers'));
    // }


  

    public function statistics()
    {
        $usersCount = User::where('role', 'user')->count();
        $advertisersCount = User::where('role', 'advertiser')->count();
        $totalcategories = Category::count();
       
        $totalAnnonce = Annonce::count();
       
        return view('admin.statistique', compact('usersCount','advertisersCount', 'totalAnnonce','totalcategories'));
    }
}






