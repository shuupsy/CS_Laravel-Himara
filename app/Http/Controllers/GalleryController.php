<?php

namespace App\Http\Controllers;

use App\Models\GalleryPhoto;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat_notNull = GalleryCategory::whereNot('id', 1)
        ->orderBy('category', 'asc')
        ->get();

        $categories = GalleryCategory::all();

        $photos = GalleryPhoto::all();

        $photos_nocat = GalleryPhoto::where('gallery_category_id', null)->get();

        return view('pages.backoffice.b-gallery', compact('photos', 'cat_notNull', 'photos_nocat', 'categories'));
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
        $photo = new GalleryPhoto();

        /* Image */
        Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(600, 800)->save(public_path('images/gallery/' . $new));

        $photo -> photo = $new;

        /* Infos */
        $photo -> title = $request -> title;
        $photo -> gallery_category_id = $request -> category;

        $photo->save();

        return redirect()->back()->with('success', '(1) Photo ajoutée avec succès!');
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
