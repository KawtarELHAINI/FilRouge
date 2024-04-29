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
    public function reserve(Annonce $annonce)
    {
        if ($annonce->availablecars > 0) {
           

            $user = auth()->user();
            $reservation = $user->reservations()->create([
                'status' => 0,
                'annonce_id' => $annonce->id,
            ]);

            $annonce->decrement('availablecars');

            return redirect()->route('utilisateur.index', $annonce)->with('success', 'car reserved!');
        } else {
            return redirect()->route('utilisateur.index')->with('error', 'car is fully booked.');
        }
    }


    public function generateTicket($id)
    {
        $reservation = Reservation::where('user_id', $id)->latest()->first();


        

        return view('tickets.show', compact('reservation'));
    }


    public function showTicket(Reservation $reservation)
    {
        // If the reservation doesn't have a ticket, abort with a 404
        if (!$reservation->ticket) {
            abort(404);
        }

        return view('tickets.show', compact('reservation'));
    }
}
