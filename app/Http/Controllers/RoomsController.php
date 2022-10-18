<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Room;
use App\Models\Option;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();

        return view('pages.backoffice.b-rooms', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = RoomCategory::all();
        $tags = Tag::orderBy('tag', 'asc')->get();
        $options = Option::orderBy('option_name', 'asc')->get();

        return view('pages.backoffice.b-rooms-add', compact('categories', 'tags', 'options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* Infos */
        $room = new Room();
        $room -> name = $request -> name;
        $room -> room_category_id = $request -> category;
        $room -> nb_persons = $request -> nb_persons;
        $room -> surface = $request -> surface;
        $room -> price = $request -> price;


        /* Image */
       /*  Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(1920, 1200)->save(public_path('images/rooms/' . $new));

        $room -> photo = $new; */

        $room->save();




        /* Tags */
        $tags = $request->tags;
        $options =  $request->options;

        $room -> tag() -> attach($tags);
        $room -> option_room() -> attach($options);

        return redirect("/admin/rooms/$room->id")->with('success', '(1) Room ajoutée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = Room::find($id);
        return view('pages.backoffice.b-rooms-show', compact('room'));
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
