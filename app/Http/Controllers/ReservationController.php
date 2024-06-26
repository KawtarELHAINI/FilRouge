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
        $user_id = Auth::user()->id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        // Check if there is any overlapping reservation for the given announcement and dates
        $existingReservation = Reservation::where('annonce_id', $id)
            ->where(function ($query) use ($start_date, $end_date) {
                $query->where(function ($query) use ($start_date, $end_date) {
                    $query->whereBetween('start_date', [$start_date, $end_date])
                        ->orWhereBetween('end_date', [$start_date, $end_date]);
                })
                ->orWhere(function ($query) use ($start_date, $end_date) {
                    $query->where('start_date', '<=', $start_date)
                        ->where('end_date', '>=', $end_date);
                });
            })
            ->exists();

        if ($existingReservation) {
            return redirect()->back()->with('error', 'This annonce is already reserved for the selected dates.');
        }

        $randomCode = '';
                $length = 10;
                $characters = '0123456789';
                $charactersLength = strlen($characters);
                for ($i = 0; $i < $length; $i++) {
                    $randomCode .= $characters[rand(0, $charactersLength - 1)];
                }
        // Create the reservation
        Reservation::create([
            'user_id' => $user_id,
            'annonce_id' => $id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'barCode' => $randomCode,
        ]);


        return redirect('/reservations');

    }


    public function reservations(){

        {
            $user_id=Auth::user()->id;
            $reservations = Reservation::where('user_id',$user_id)->get();
            return view('tickets', compact('reservations'));
        }
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
  