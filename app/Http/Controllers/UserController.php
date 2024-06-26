<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Category;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function viewUsers()
    {
        // dd(Auth::user()->id);
        $users = User::withTrashed()->get();
        return view('admin.users', compact('users'));
    }

    public function searchUsers(Request $request)
    {
        
        $searchTerm = $request->input('search');


        $users = User::where('name', 'like', '%' . $searchTerm . '%')->get();


        return view('admin.users', compact('users'));
    }


   
  

        public function banUser($userId)
        {
            $userToBan = User::find($userId);
        
            if ($userToBan) {
                // Check if the user to be banned is not an admin
                if ($userToBan->role !== 'admin') {
                    $userToBan->update(['banned' => true]);
                    if (auth()->check() && auth()->user()->id == $userToBan->id) {
                        auth()->logout();
                        return redirect()->route('login')->with('banned_message', 'You are banned from logging in.');
                    }
                    return redirect()->route('users')->with('success', 'User has been banned.');
                } else {
                    return redirect()->route('users')->with('error', 'You cannot ban an admin.');
                }
            }
        
            return redirect()->route('users')->with('error', 'User not found.');
        }
    



    public function unbanUser($userId)
    {
        $user = User::find($userId);
        if ($user) {
            $user->update(['banned' => false]);
            return redirect()->route('users')->with('success', 'User unbanned successfully.');
        }
        return redirect()->route('users')->with('error', 'User not found.');
    }




    public function statistics()
    {
        $usersCount = User::count();
        $totalreservations = Reservation::count();
        $totalcategories = Category::count();
       
        $totalAnnonce = Annonce::count();
       
        return view('admin.statistique', compact('usersCount','totalreservations', 'totalAnnonce','totalcategories'));
    }
}





