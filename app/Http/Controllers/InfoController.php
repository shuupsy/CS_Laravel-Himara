<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.backoffice.b-info');
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
            "address" => "required|min:1|max:100",
            "phone" => "required|numeric|size:11",
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "fax" => "required|numeric|min:1|max:50",
            "url" => "required|min:1|max:255",
        ]);

        $hotel = Hotel::first();
        $hotel->update([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'fax' => $request->fax,
            'url' => $request->url,
            'logo' => '',
        ]);

      /*   $logo_resize = */

        return redirect()->back()->with('success', "Informations de l'hôtel, mises à jour!");
    }

    public function update_logo(Request $request)
    {
        request()->validate([
            "logo" => "mimes:jpg,png,jpeg",
        ]);

        $hotel = Hotel::first();

        if($request->hasFile('logo')) {
            Storage::put('public/assets/', $request->file('logo'));

            /* Nom du fichier */
            $new = $request -> file('logo')->hashName();
            /* Localisation image */
            $logo_path = public_path('storage/assets/' . $new);
            /* Resize */
            $img = Image::make($logo_path)->resize(120, 30)->save(public_path('images/logos/' . $new));

            $hotel -> logo = $new;
            $hotel->save();

            return redirect()->back()->with('success', "Logo de l'hôtel, mis à jour!");
        }
    }

    public function update_biglogo(Request $request)
    {
        request()->validate([
            "big_logo" => "mimes:jpg,png,jpeg",
        ]);

        $hotel = Hotel::first();

        if($request->hasFile('big_logo')) {
            Storage::put('public/assets/', $request->file('big_logo'));

            $new = $request -> file('big_logo')->hashName();
            $logo_path = public_path('storage/assets/' . $new);
            $img = Image::make($logo_path)->resize(75, 105)->save(public_path('images/logos/' . $new));

            $hotel -> big_logo = $new;
            $hotel->save();

            return redirect()->back()->with('success', "Logo de l'hôtel, mis à jour!");
        }
    }
}
