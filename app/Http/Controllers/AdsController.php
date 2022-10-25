<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advertisement;
use Illuminate\Support\Facades\File;
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
        $count = Advertisement::all()->count();

        $ad = Advertisement::where('is_Main', 1)
            ->first();

        $ads = Advertisement::orderBy('id', 'desc')->get();
        return view('pages.backoffice.b-ads', compact('ad', 'ads', 'count'));
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
            "video_link" => "required|min:1|max:300",
            "background_img" => "required|mimes:jpg,png,jpeg",
        ]);

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
        request()->validate([
            "video_link" => "required|min:1|max:300",
            "background_img" => "required|mimes:jpg,png,jpeg",
        ]);

        $ads = Advertisement::all();
        $ad = Advertisement::find($id);

        /* Main pub? */
        if($request->is_Main == true){
            foreach($ads as $a){
                $a->is_Main = false;
                $a->save();
            };
            $ad->is_Main = true;
        }

        /* Image */
        if($request->file('image') != null){
            Storage::put('public/assets/', $request->file('image'));

            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(1920, 1280)->save(public_path('images/video/' . $new));

            $ad -> background_img = $new;
        };

        /* Vidéo */
        $ad->video_link = $request->video_link;

        $ad->save();

        return redirect()->back()->with('success', '(1) Ad modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Advertisement::find($id);
        $new_main = Advertisement::orderBy('id', 'desc')
                ->first();
        $count = Advertisement::all()->count();

        if($delete->background_img != 'video.jpg'){
            Storage::delete('public/assets/' . $delete->background_img);
            File::delete(public_path('images/video/' . $delete->background_img ));
        }


        if($delete->is_Main == true && $count > 1){
            $new_main = Advertisement::orderBy('id', 'desc')
                ->whereNot('id', $id)
                ->first();
            $new_main->update([
                'is_Main' => true,
            ]);
        }


        $delete->delete();

        return redirect()->back()->with('success', '(1) Ad supprimé avec succès!');
    }
}
