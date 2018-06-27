<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tool;
use App\Hall;

class BookingController extends Controller
{
    public function toolIndex(Tool $tool)
    {
        return view('tools.booking', compact('tool'));
    }

    public function hallIndex(Hall $hall)
    {
        return view('halls.booking', compact('hall'));
    }
}