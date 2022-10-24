<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $notifications = Notification::orderBy('id', 'desc')->get();

        return view('pages.backoffice.b-home', compact('notifications'));
    }
}
