<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\AboutContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = AboutContent::orderBy('id', 'desc')
            ->first();

        return view('pages.backoffice.b-about', compact('about'));
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            "subheading" => "required|min:1|max:100",
            "big_description" => "required|min:1|max:1000",
            "small_description" => "required|min:1|max:300",
            "small_title" => "required|min:1|max:100",
            "image" => "mimes:jpg,png,jpeg",
             ]);

        $about = AboutContent::find($id);

        /* Image */
        if($request->file('image') != null){
            /* Supprimer image précédente */
            if($about->background_img != 'about-card.jpg'){
                Storage::delete('public/assets/' . $about->photo);
                File::delete(public_path('images/' . $about->photo));
            }

            Storage::put('public/assets/', $request->file('image'));
            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(400, 600)->save(public_path('images/about/' . $new));

            $about -> background_img = $new;
        };

        /* Infos */
        if($request->heading != null) {
            $about -> heading = Str::of($request -> heading)->replaceArray('$', ['<span class="text-himara">', '</span>']);
        }
        $about -> subheading = $request -> subheading;
        $about -> big_description = $request -> big_description;
        $about -> small_description = $request -> small_description;
        $about -> small_title = $request -> small_title;

        $about->save();

        return redirect()->back()->with('success', 'About modifié avec succès!');
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
