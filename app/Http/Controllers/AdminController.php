<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $notifications = Notification::orderBy('id', 'desc')
        ->paginate(10);

        return view('pages.backoffice.b-home', compact('notifications'));
    }
}
