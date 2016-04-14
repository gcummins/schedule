<?php

namespace App\Http\Controllers;

use App\Bay;

use App\Http\Requests;
use Illuminate\Http\Request;

class BayController extends Controller
{
    public function create(Request $request)
    {
        return view('bay.create');
    }

    public function store(Request $request)
    {
        Bay::create($request->except('_token'));
        return redirect(route('schedule.index'));
    }
}
