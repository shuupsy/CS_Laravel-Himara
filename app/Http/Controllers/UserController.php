<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('role_id', 'asc')->get();

        $roles = Role::all();

        return view('pages.backoffice.b-home', compact('users', 'roles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        $user = User::find($id);

        $user -> role_id = $request->role;
        $user->save();

        return redirect()->back()->with('success', "(1) Utilisateur mis à jour avec succès!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = User::find($id);

        if($delete->photo != 'admin.jpg' ||
        $delete->photo != 'user1.jpg' ||
        $delete->photo != 'user2.jpg' ||
        $delete->photo != 'user3.jpg' ||
        $delete->photo != 'user4.jpg' ||
        $delete->photo != 'user5.jpg' ||
        $delete->photo != 'user6.jpg' ||
        $delete->photo != 'user7.jpg' ||
        $delete->photo != 'user8.jpg' ||
        $delete->photo != 'user9.jpg'){
            Storage::delete('public/assets/' . $delete->photo);
            File::delete(public_path('images/users/' . $delete->photo));
        }

        $delete->delete();

        return redirect()->back()->with('success', "(1) Utilisateur supprimé avec succès!");
    }
}
