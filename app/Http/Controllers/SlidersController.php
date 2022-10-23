<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::orderBy('order', 'asc')->get();

        return view('pages.backoffice.b-sliders', compact('sliders'));
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
      $slider = new Slider();
      $slider->layer1 = $request->layer1;
      $slider->layer2 = $request->layer2;

      /* Compter le nombre de rows dans la table Slider pour l'ordre */
      $count = Slider::all()->count();
      $slider->order = $count +1;

      /* Small title (optional) */
      if($request->layer6 != null){
        $slider->layer6 = $request->layer6;
      }
      /* Background image */
      if($request->hasFile('image')){
        Storage::put('public/assets/', $request->file('image'));
        $new = $request->file('image')->hashName();
        $new_path = public_path('storage/assets/' . $new);

        $resize = Image::make($new_path)->resize(1920, 1280)->save(public_path('images/slider/' . $new));

        $slider -> background_img = $new;
      }
      /* Background image par défaut */
      else {
        $slider -> background_img = 'slider2.jpg';
      }

      $slider->save();
      return redirect()->back()->with('success', 'Nouveau slider ajouté!');

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
        $sliders = Slider::all();
        $slider = Slider::find($id);

        $slider->layer1 = $request->layer1;
        $slider->layer2 = $request->layer2;

        if($request->file('image') != null){
            Storage::put('public/assets/', $request->file('image'));

            $new = $request->file('image')->hashName();
            $new_path = public_path('storage/assets/' . $new);

            $resize = Image::make($new_path)->resize(1920, 1280)->save(public_path('images/slider/' . $new));

            $slider -> background_img = $new;
        };

        /* Main slider ? */

        $count = Slider::all()->count();
        if($request->is_Main == true){
            for($i = 0; $i < $count; $i++) {
                $sliders[$i] -> order = $i + 2;
                $sliders[$i]->save();
            }
        }

        $slider -> order = 1;
        $slider->save();

        return redirect()->back()->with("Slider $id, mis à jour!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Slider::destroy($id);
        return redirect()->back()->with('success', '(1) slider supprimé!');
    }
}
