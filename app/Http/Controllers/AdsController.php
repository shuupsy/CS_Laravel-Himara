<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ad = Advertisement::where('is_Main', 1)
            ->first();

        $ads = Advertisement::all();
        return view('pages.backoffice.b-ads', compact('ad', 'ads'));
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
        $ads = Advertisement::all();
        $ad = new Advertisement();

        /* Bg image */
        Storage::put('public/assets/', $request->file('image'));
        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);

        $resize = Image::make($new_path)->resize(1920, 800)->save(public_path('images/video/' . $new));

        $ad->background_img = $new;

        /* Main pub? */
        foreach($ads as $a){
            $a->is_Main = false;
            $a->save();
        };
        $ad->is_Main = true;

        /* Video */
        $ad->video_link = $request-> video_link;

        $ad->save();

        return redirect()->back()->with('success', 'Nouvel ad ajouté!');
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
