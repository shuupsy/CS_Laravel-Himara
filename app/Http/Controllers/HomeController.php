<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Room;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Service;
use App\Models\RoomReview;
use App\Models\AboutContent;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\ContactMessage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        $about = AboutContent::orderBy('id', 'desc')
            ->first();

        $ad = Advertisement::first();

        $rooms = Room::where('is_Available', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $services = Service::all();

        $gallery = GalleryPhoto::inRandomOrder()
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

}
