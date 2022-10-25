<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\RoomDescription;

class RoomsDescriptionController extends Controller
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
            "description1" => "required|min:1|max:1600",
            "description2" => "required|min:1|max:1600",
            "description3" => "required|min:1|max:1600",
            "description4" => "required|min:1|max:1600",
        ]);
        $description = new RoomDescription();

        $description->room_id = $request->room;
        $description->description1 = $request->description1;
        $description->description2 = $request->description2;
        $description->description3 = $request->description3;
        $description->description4 = $request->description4;

        $description->save();

        return redirect()->back()->with('sucess', 'Descriptions créees, avec succès!');
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
            "description1" => "required|min:1|max:1600",
            "description2" => "required|min:1|max:1600",
            "description3" => "required|min:1|max:1600",
            "description4" => "required|min:1|max:1600",
        ]);

        $description = RoomDescription::find($id);

        $description->description1 = $request->description1;
        $description->description2 = $request->description2;
        $description->description3 = $request->description3;
        $description->description4 = $request->description4;

        $description->save();

        return redirect()->back()->with('sucess', 'Descriptions mises à jour, avec succès!');
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
