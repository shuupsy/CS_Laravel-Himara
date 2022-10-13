<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Dish;
use App\Models\Room;
use App\Models\Staff;
use App\Models\Option;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Service;
use App\Models\RoomReview;
use App\Models\AboutContent;
use App\Models\GalleryPhoto;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\ContactMessage;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $sliders = Slider::all();

        $about = AboutContent::orderBy('id', 'desc')
            ->first();

        $ad = Advertisement::where('is_Main', 1)
            ->first();

        $rooms = Room::where('is_Available', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $services = Service::all();

        $gallery = GalleryPhoto::inRandomOrder()
            ->take(8)
            ->get();

        $dishes = Dish::orderBy('id', 'asc')
            ->paginate(2)
            ->fragment('restaurant');

        $articles = Article::orderBy('id', 'desc')
            ->inRandomOrder()
            ->take(3)
            ->get();

        $reviews = RoomReview::orderBy('id', 'desc')
            ->take(9)
            ->get();

      /*   dd($rooms); */
        return view('pages.home', compact('sliders', 'about', 'rooms', 'services', 'gallery', 'dishes', 'articles', 'reviews', 'ad'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new ContactMessage();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;

        $message->save();

        return redirect()->back();
   /*      return redirect('/#home-form'); */
    }


    public function Room(){
        $rooms = Room::orderby('id', 'asc')
            ->paginate(10);

        $room_cats = RoomCategory::withCount('rooms')
            ->orderBy('id', 'asc')
            ->get();

        $room_tags = Tag::all();

        return view('pages.rooms-list', compact('rooms', 'room_cats', 'room_tags'));
    }

    public function ShowRoom($id){
        $room = Room::find($id);
        $options = Option::all();

        return view('pages.room', compact('room', 'options'));
    }

    public function Staff(){
        $boss = Staff::first();
        $staffmembers = Staff::whereNot('id', 1)
            ->inRandomOrder()
            ->take(7)
            ->get();
        return view('pages.staff', compact('boss', 'staffmembers'));
    }

    public function Gallery(){
        $photos = GalleryPhoto::all();
        return view('pages.gallery', compact('photos'));
    }

}
