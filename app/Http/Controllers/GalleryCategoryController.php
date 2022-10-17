<?php

namespace App\Http\Controllers;

use App\Models\GalleryCategory;
use Illuminate\Http\Request;

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
        $new = new GalleryCategory();
        $new->category = strtolower($request -> category);

        $new->save();

        return redirect()->back()->with('success', "Catégorie '$request->category' ajoutée avec succès!");
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
        $delete->delete();

        return redirect()->back()->with('success', "Catégorie '$delete->category_name' supprimée!");
    }
}
