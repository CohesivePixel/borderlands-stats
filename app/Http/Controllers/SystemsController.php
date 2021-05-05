<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class SystemsController extends Controller
{
    public function index()
    {
        return view('addsystem');
    }

    public function show(App\System $system)
    {
        return $system;
        return view('show_system', compact('system'));
    }

    public function store(Request $request)
    {
        $system = new App\System;
        $system->system_name = $request->system_add_name;
        $system->system_star_class = $request->system_add_star_class;
        $system->system_industry_type = $request->system_add_industry_type;
        $system->save();

        return redirect('/system');
    }

    public function autoComplete() {
        $systemnames = App\System::lists('system_name')->toArray();
        return $systemnames;
    }
}

