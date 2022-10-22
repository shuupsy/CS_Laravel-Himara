<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Mail\GiveReview;
use App\Models\Room;
use App\Models\Booking;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = RoomCategory::all();

        $rooms = Room::where('is_Available', 1)
                    /* ->select('id', 'name', 'price', 'room_category_id')
                    /* ->inRandomOrder() */
                   /*  ->take(count($categories)) */
                    ->orderBy('room_category_id', 'asc')
                    ->get();

        $promos = Room::where('in_Sale', 1)
                ->take(3)
                ->orderBy('updated_at', 'desc')
                ->get();

        return view('pages.booking-form', compact('rooms','promos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new = new Booking();

        $new->room_id = $request->roomtype;
        $new->user_id = $request->userid;
        $new->comments = $request->bookingcomments;

        /* Rendre non dispo la chambre */
        $room = Room::find($request->roomtype);
        $room->is_Available = false;
        $room->save();

        $new->save();

        /* Confirmation de réservation */
        $email = $request->bookingemail;
        $data = ([
            'name' => $request->bookingname,
            'email' => $email,
            ]);

        Mail::to($email)->send(new BookingConfirmation($data));
     /*    Mail::to($email)->send(new WelcomeMail($data)); */

     /* Système de review */
   /*   Mail::to($email)->send(new GiveReview($data)); */

        return redirect()->back()->with('sucess', "Réservation faite!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
