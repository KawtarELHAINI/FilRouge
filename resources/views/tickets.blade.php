@extends('layout')
@include('partials.navbar')
    @if (!function_exists('encodereservationDetails'))
        @php
        // Define the function encodereservationDetails if it doesn't already exist
        function encodereservationDetails($reservation) {
            // Encode reservation details into an associative array
            $reservationData = [
            'start_date' => $reservation->start_date,
            'end_date' => $reservation->end_date,

            ];

            // Encode the reservation data into JSON and return
            return json_encode($reservationData);
        }
        @endphp
    @endif
    <div class="flex-col ml-4"><a class="mt-5 inline-flex bg-yellow-200 font-bold text-sm rounded-lg w-10 m-2 px-2.5 py-0.5" href="{{route('home')}}"><svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
  </svg></a></div>
    <div class="flex flex-wrap gap-1 font-semibold font-sans">


   @foreach ($reservations as $reservation)
        <div class="reservation w-80 mb-10 ml-10 bg-yellow-200 relative mt-10">

            <svg class="absolute top-[-145px] right-[1.4rem] m-[7rem] rotate-90" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[7px] right-[19.4rem] m-[-2rem] rotate-45" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>
            <svg class="absolute top-[-311px] right-[-17.6rem] m-[16rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve" transform="rotate(135)">
                <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
            </svg>

            <div class="title py-10 px-10">
                <p class="text-gray-600 text-2xl">Your rent ticket</p>
                <p class="text-4xl">{{$reservation->name}}</p>
            </div>
           
            <div class="info px-10 ">
                <table class="w-full text-lg">
                    <tr>
                        <th class="w-2/5">START DATE</th>
                        <th class="w-1/5">END DATE</th>
                    </tr>
                    <tr>
                        <td class="px-8">{{$reservation->start_date}}</td>
                        <td>{{$reservation->end_date}}</td>
                    </tr>
                </table>

            </div>

            <div class="serial px-25 py-25 relative">
                <svg class="absolute top-[-302px] left-[-17.6rem] m-[16.4rem]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                    <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
                </svg>
                <svg class="absolute top-[-324px] right-[-17.6rem] m-[16.4rem] rotate-180" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 65 81.25" enable-background="new 0 0 65 65" xml:space="preserve">
                    <path d="M17.333,0.667c-0.829,0-1.5,0.671-1.5,1.5v60.666c0,0.828,0.671,1.5,1.5,1.5c17.552,0,31.833-14.28,31.833-31.833S34.886,0.667,17.333,0.667z" fill="#ffffff" />
                </svg>

                <p class="text-lg font-bold hidden">QR Code: {{ $reservation->barCode }}</p>

                <hr class="border-dashed border-t border-gray-400 mx-25 my-12">
                <!-- Display the QR code -->
                <!-- Display the QR code -->
                <img class="mx-auto" src="https://api.qrserver.com/v1/create-qr-code/?size=70x70&data={{ urlencode(encodereservationDetails($reservation)) }}" alt="QR Code"><table class="ml-28 numbers">
                    <tr>
                        <!-- Display the numeric value -->
                        <td class="text-center">{{$reservation->barCode }}</td>
                    </tr>
                </table>
            </div>
        </div>
        @endforeach
    </div>