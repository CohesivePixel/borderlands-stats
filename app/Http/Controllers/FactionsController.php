<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FactionsController extends Controller
{
    public function index()
    {
        return view('addfaction');
    }

    public function store(Request $request)
    {
        $systemid = App\FSData::getSystemId($request->faction_add_home_system);
        $faction = new App\Faction;

        $faction->faction_name = $request->faction_add_name;
        $faction->faction_pending_state = $request->faction_add_pending_state;
        $faction->faction_current_state = $request->faction_add_current_state;
        $faction->faction_recovering_state = $request->faction_add_recovering_state;
        $faction->faction_home_system_id = $systemid[0];
        $faction->save();

        $fsdata = new App\FSData;
        $fsdata->fsd_system_id = $systemid;
        $fsdata->fsd_contains_faction_name = $request->faction_add_name;
        $fsdata->fsd_faction_influence = 0;
        $fsdata->fsd_faction_previous_influence = 0;
        $fsdata->save();


        return redirect('/faction');
    }

    public function autoComplete($name)
    {
        $factionnames = App\Faction::getFactions($name);
        return $factionnames;
    }
}
