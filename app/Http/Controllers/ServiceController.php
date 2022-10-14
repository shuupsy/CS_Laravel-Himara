<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        $count = Service::all()->count();

        $logos = Logo::all();
        return view('pages.backoffice.b-service', compact('services', 'count', 'logos'));
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
        $new_service = new Service();

        /* Image */
        Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(1170, 750)->save(public_path('images/services/' . $new));

        $new_service -> image = $new;

        /* Infos */
        $new_service -> title = $request -> title;
        $new_service -> description = $request -> description;
        $new_service -> logo_id = $request -> logo;

        $new_service->save();

        return redirect()->back()->with('success', '(1) Service ajouté avec succès!');
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
        $update = Service::find($id);

        /* Image */
        if($request->file('image') != null){
            Storage::put('public/assets/', $request->file('image'));

            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(1170, 750)->save(public_path('images/services/' . $new));

            $update -> image = $new;
        };

        /* Infos */
        $update -> title = $request -> title;
        $update -> description = $request -> description;
        $update -> logo_id = $request -> logo;

        $update->save();

        return redirect()->back()->with('success', '(1) Service modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Service::find($id);

        Storage::delete('public/assets/' . $delete->photo);
        File::delete(public_path('images/service/' . $delete->photo));


        $delete->delete();

        return redirect()->back()->with('success', '(1) Service supprimé avec succès!');
    }
}
