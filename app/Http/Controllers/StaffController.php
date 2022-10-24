<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boss = Staff::first();
        $staffmembers = Staff::whereNot('id', 1)
            ->inRandomOrder()
            ->take(2)
            ->get();

        $all = Staff::orderBy('id', 'asc')
        ->paginate(4);

        return view('pages.backoffice.b-staff', compact('boss', 'staffmembers', 'all'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_member = new Staff();

        /* Image */
        Storage::put('public/assets/', $request->file('image'));

        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);
        $resize = Image::make($new_path)->resize(540, 540)->save(public_path('images/staff/' . $new));

        $new_member -> photo = $new;

        /* Infos */
        $new_member -> first_name = $request -> first_name;
        $new_member -> last_name = $request -> last_name;
        $new_member -> description = $request -> description;
        $new_member -> job = $request -> job;

        $new_member->save();

        return redirect()->back()->with('success', '(1) Membre ajouté avec succès!');
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
        $update = Staff::find($id);

        /* Image */
        if($request->file('image') != null){
            Storage::put('public/assets/', $request->file('image'));

            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(540, 540)->save(public_path('images/staff/' . $new));

            $update -> photo = $new;
        };

        /* Infos */
        $update -> first_name = $request -> first_name;
        $update -> last_name = $request -> last_name;
        $update -> description = $request -> description;
        $update -> job = $request -> job;

        $update->save();

        return redirect()->back()->with('success', '(1) Membre modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Staff::find($id);

        if(!Str::startsWith($delete->photo, 'http')){
            Storage::delete('public/assets/' . $delete->photo);
            File::delete(public_path('images/staff/' . $delete->photo));
        }

        $delete->delete();

        return redirect()->back()->with('success', '(1) Membre supprimé avec succès!');
    }
}
