<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Annonce;
use Illuminate\Http\Request;

class UserController extends Controller
{
   

    public function index()
{
    $users = User::all();

    return view('admin.users', compact('users'));
}
public function update($userId)
{
$user = User::find($userId);

if ($user && $user->role !== 'admin') {
    if ($user->is_banned) {
        $user->is_banned = false;
        $user->restore(); 
        $user->annonce()->restore();
    } else {
        // Ban the user
        $user->is_banned = true;
        $user->delete(); 
        $user->annonce()->delete();
    }
}

return back();
}


     
  

    public function statistics()
    {
        $usersCount = User::where('role', 'user')->count();
        $advertisersCount = User::where('role', 'advertiser')->count();
        $totalcategories = Category::count();
       
        $totalAnnonce = Annonce::count();
       
        return view('admin.statistique', compact('usersCount','advertisersCount', 'totalAnnonce','totalcategories'));
    }
}




