<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\RoomReview;
use App\Models\Notification;
use App\Providers\NewNotification;
use Illuminate\Http\Request;
use App\Providers\SendEmailNotification;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages.error404');
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
        $review = new RoomReview();
        $review->booking_id = $request->booking;
        $review->review = $request->review;
        $review->rating = $request->rating;

        $review->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = RoomReview::find($id);
        
        return view('pages.review', compact('review'));
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
        $review = RoomReview::find($id);
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->is_Filled = true;

        $review->save();

        /* Mail back */
        $notif = new Notification();
        $notif->room_review_id = $review->id;
        $notif->save();

        event(new NewNotification());

        return redirect()->back();
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

    public function publish($id){
        $review = RoomReview::find($id);
        $review->is_Active = true;
        $review->save();

        return redirect()->back()->with('success', '(1) nouveau review publié avec succès!');
    }
}
