<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryCategoryController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "category" => "required|min:1|max:45",
        ]);

        $new = new GalleryCategory();
        $new->category = strtolower($request -> category);

        $new->save();

        return redirect()->back()->with('success', "Catégorie '$request->category' ajoutée avec succès!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        request()->validate([
            "category" => "required|min:1|max:45",
        ]);

        $categories = GalleryCategory::all();

        $category = GalleryCategory::find($id);
        return view('pages.backoffice.b-gallery-show', compact('categories','category'));
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
        $update = GalleryCategory::find($id);
        $update->category = strtolower($request -> category);

        $update->save();

        return redirect()->back()->with('success', "(1) Catégorie mise à jour avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = GalleryCategory::find($id);

        /* Supprimer localement les photos appartenant à la cat supprimée */
        foreach($delete->photos as $photo){
            if($photo != 'gallery1.jpg' ||
            $photo != 'gallery2.jpg' ||
            $photo != 'gallery3.jpg' ||
            $photo != 'gallery4.jpg' ||
            $photo != 'gallery5.jpg' ||
            $photo != 'gallery6.jpg' ||
            $photo != 'gallery7.jpg' ||
            $photo != 'gallery8.jpg' ||
            $photo != 'gallery9.jpg' ||
            $photo != 'gallery10.jpg'){

            Storage::delete('public/assets/' . $photo->photo);
            File::delete(public_path('images/gallery/' . $photo->photo));
            }
        }

        $delete->delete();

        return redirect()->back()->with('success', "Catégorie '$delete->category' supprimée!");
    }
}
