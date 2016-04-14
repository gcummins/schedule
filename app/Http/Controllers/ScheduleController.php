<?php

namespace App\Http\Controllers;

use App\Bay;
use App\Stage;

use App\Http\Requests;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index(Request $request)
    {
        $bays = Bay::all();
        $stages = Stage::all();

        return view('schedule.index', compact('bays', 'stages'));
    }
}
