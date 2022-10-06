<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\Room;
use App\Models\Option;
use App\Models\Slider;
use App\Models\Service;
use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Dish;

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

      /*   dd($rooms); */
        return view('pages.home', compact('sliders', 'about', 'rooms', 'services', 'gallery', 'dishes', 'ad'));
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
        //
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
