<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $example = Dish::first();
        $dishes = Dish::orderBy('title', 'asc')
        ->paginate(6)
        ->fragment('food-update');

        return view('pages.backoffice.b-restaurant', compact('dishes', 'example'));
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
        request()->validate([
            "title" => "required|min:1|max:50",
            "description" => "required|min:1|max:90",
            "price" => "required|numeric|min:1|max:50",
            "image" => "required|mimes:jpg,png,jpeg",
        ]);

        $dish = new Dish();

        /* Image */
        Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(640, 420)->save(public_path('images/restaurant/' . $new));

        $dish -> photo = $new;

        /* Infos */
        $dish -> title = $request -> title;
        $dish -> description = $request -> description;
        $dish -> price = $request -> price;

        $dish->save();

        return redirect()->back()->with('success', '(1) Plat ajouté avec succès!');
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
            "title" => "required|min:1|max:50",
            "description" => "required|min:1|max:90",
            "price" => "required|numeric|min:1|max:50",
            "image" => "mimes:jpg,png,jpeg",
        ]);

        $dish = Dish::find($id);

        /* Image */
        if($request->file('image') != null){
            /* Supprimer image précédente */
            if($dish->photo != 'restaurant1.jpg' || $dish->photo != 'restaurant2.jpg' || !Str::startsWith($dish->photo, 'https:')){
                Storage::delete('public/assets/' . $dish->photo);
                File::delete(public_path('images/restaurant/' . $dish->photo));
            }
            Storage::put('public/assets/', $request->file('image'));

            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(640, 420)->save(public_path('images/restaurant/' . $new));

            $dish -> photo = $new;
        };

        /* Infos */
        $dish -> title = $request -> title;
        $dish -> description = $request -> description;
        $dish -> price = $request -> price;

        $dish->save();

        return redirect()->back()->with('success', '(1) Plat modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Dish::find($id);

        if($delete->photo != 'restaurant1.jpg' || $delete->photo != 'restaurant2.jpg' || !Str::startsWith($delete->photo, 'https:')){
            Storage::delete('public/assets/' . $delete->photo);
            File::delete(public_path('images/restaurant/' . $delete->photo));
        }

        $delete->delete();

        return redirect()->back()->with('success', '(1) Plat supprimé avec succès!');
    }
}
