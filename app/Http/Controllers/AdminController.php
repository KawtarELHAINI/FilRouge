<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function ArchiverAnnonce(string $id){
       $annonce = Annonce::findOrFail($id);
       $annonce->delete();       
       return redirect()->route('viewAll');
    }

    public function dearchiverAnnonce(string $id){
        $annonce = Annonce::withTrashed()->findOrFail($id);
        $annonce->restore();
       return redirect()->route('viewAll');
    }

    public function desactivateUser(string $id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users');
       }
       public function activateUser(string $id){
        $user = User::withTrashed()->findOrFail($id);
        $user->restore();
        return redirect()->route('users');
       }



}
