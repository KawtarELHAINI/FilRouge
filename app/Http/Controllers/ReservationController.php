<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Category;
use App\Models\Annonce;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{

    public function reserve(Request $request, $id)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
    
        $user_id = Auth::user()->id;
    
        // $annonce = Annonce::findOrFail($id);
    
        // Check if the annonce is available for reservation
        $existingReservation = Reservation::where('annonce_id', $id)
            ->where(function ($query) use ($request) {
                $query->whereBetween('start_date', [$request->start_date, $request->end_date])
                    ->orWhereBetween('end_date', [$request->start_date, $request->end_date]);
            })->exists();
    
        if ($existingReservation) {
            return redirect()->back()->with('error', 'This annonce is already reserved for the selected dates.');
        }
    
        // Create the reservation
        Reservation::create([
            'user_id' => $user_id,
            'annonce_id' => $id,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
    
        return redirect()->back()->with('success', 'Reservation created successfully.');
    }
    


    // public function generateTicket($id)
    // {
    //     $reservation = Reservation::where('user_id', $id)->latest()->first();


        

    //     return view('tickets.show', compact('reservation'));
    // }


    // public function showTicket(Reservation $reservation)
    // {
    //     // If the reservation doesn't have a ticket, abort with a 404
    //     if (!$reservation->ticket) {
    //         abort(404);
    //     }

    //     return view('tickets.show', compact('reservation'));
    // }
}
