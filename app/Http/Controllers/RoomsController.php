<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Room;
use App\Models\Option;
use App\Models\RoomCategory;
use App\Models\RoomPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        request()->validate([
            "name" => "required|min:1|max:50",
            "nb_persons" => "required|numeric|min:1|max:6",
            "surface" => "required|numeric|min:1|max:200",
            "price" => "required|numeric|min:1|max:1000",
            "image" => "required|mimes:jpg,png,jpeg",
        ]);


        $room_cat = Room::where('room_category_id', $request->category)->get();

        /* Possibilité de créer des rooms tant que la cat ne dépasse pas 8 rooms */
        if(count($room_cat) < 8){
        /* Infos */
        $room = new Room();
        $room -> name = $request -> name;
        $room -> room_category_id = $request -> category;
        $room -> nb_persons = $request -> nb_persons;
        $room -> surface = $request -> surface;
        $room -> price = $request -> price;

        /* Image */
        Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(1920, 1200)->save(public_path('images/rooms/' . $new));

        $room -> photo = $new;

        $room->save();

        /* Tags - Options */
        $tags = $request->tags;
        $options =  $request->options;

        $room -> tag() -> attach($tags);
        $room -> option_room() -> attach($options);

        return redirect("/admin/rooms/$room->id")->with('success', '(1) Room ajoutée avec succès!');
        }

        else {
            return redirect()->back()->with('errors','Vous avez excédé le nombre de chambres (8) pour cette catégorie!');
        }

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
        $descriptions = $room->room_descriptions;

        $photos = $room->room_photos;

        $categories = RoomCategory::all();
        $tags = Tag::orderBy('tag', 'asc')->get();
        $options = Option::orderBy('option_name', 'asc')->get();

        return view('pages.backoffice.b-rooms-show', compact('room', 'categories', 'tags', 'options', 'descriptions', 'photos'));
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
        request()->validate([
            "name" => "required|min:1|max:50",
            "nb_persons" => "required|numeric|min:1|max:6",
            "surface" => "required|numeric|min:1|max:200",
            "price" => "required|numeric|min:1|max:1000",
            "image" => "mimes:jpg,png,jpeg",
        ]);

        /* Infos */
        $room = Room::find($id);
        $room -> name = $request -> name;
        $room -> room_category_id = $request -> category;
        $room -> nb_persons = $request -> nb_persons;
        $room -> surface = $request -> surface;
        $room -> price = $request -> price;


        /* Image */
        if($request->file('image') != null){
            if($room->photo != 'deluxe.jpg' || $room->photo != 'double.jpg' || $room->photo != 'family.jpg'|| $room->photo != 'honeymoon.jpg'|| $room->photo != 'king.jpg'|| $room->photo != 'luxury.jpg'|| $room->photo != 'single1.jpg'|| $room->photo != 'small.jpg'|| $room->photo != 'view.jpg'){
                /* Supprimer l'ancienne image */
                Storage::delete('public/assets/' . $room->photo);
                File::delete(public_path('images/rooms/' . $room->photo));

                /* Ajouter nouvelle image */
                Storage::put('public/assets/', $request->file('image'));

                $new = $request->file('image')->hashName();
                $new_path = public_path('storage/assets/' . $new);
                $resize = Image::make($new_path)->resize(1920, 1200)->save(public_path('images/rooms/' . $new));

                $room -> photo = $new;
            }
        }

        $room->save();

        /* Tags - Options */
        $tags = $request->tags;
        $options =  $request->options;

        $room -> tag() -> sync($tags);
        $room -> option_room() -> sync($options);


        return redirect()->back()->with('success', '(1) Room modifiée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Room::find($id);

        if($delete->photo != 'deluxe.jpg' || $delete->photo != 'double.jpg' || $delete->photo != 'family.jpg'|| $delete->photo != 'honeymoon.jpg'|| $delete->photo != 'king.jpg'|| $delete->photo != 'luxury.jpg'|| $delete->photo != 'single1.jpg'|| $delete->photo != 'small.jpg'|| $delete->photo != 'view.jpg'){
            Storage::delete('public/assets/' . $delete->photo);
            File::delete(public_path('images/rooms/' . $delete->photo));
        }

        $delete->delete();

        return redirect()->back()->with('success', '(1) Room supprimée avec succès!');

    }
}
