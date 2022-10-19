<?php

namespace App\Http\Controllers;

use App\Models\RoomPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

class RoomsPhotoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photo = new RoomPhoto();

        /* Image */
        Storage::put('public/assets/', $request->file('photo'));

        $new = $request->file('photo')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(1920, 1200)->save(public_path('images/rooms/' . $new));

        $photo -> photo = $new;
        $photo->room_id = $request -> room;

        $photo->save();

        return Redirect::to(URL::previous() . "#room-gallery")->with('success', '(1) Photo ajoutée avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = RoomPhoto::find($id);

        if($delete->photo != 'deluxe.jpg' || $delete->photo != 'double.jpg' || $delete->photo != 'family.jpg'|| $delete->photo != 'honeymoon.jpg'|| $delete->photo != 'king.jpg'|| $delete->photo != 'luxury.jpg'|| $delete->photo != 'single1.jpg'|| $delete->photo != 'small.jpg'|| $delete->photo != 'view.jpg'){

            Storage::delete('public/assets/' . $delete->photo);
            File::delete(public_path('images/rooms/' . $delete->photo));
        }

        $delete->delete();

        return Redirect::to(URL::previous() . "#room-gallery")->with('success', '(1) Photo supprimée avec succès!');
    }
}
