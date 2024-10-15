<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilotController extends Controller
{
    public function index()
    {
        return view('pilot.index');
    }
}
