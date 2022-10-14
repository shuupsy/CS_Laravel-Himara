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
        $dish = Dish::find($id);

        /* Image */
        if($request->file('image') != null){
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
