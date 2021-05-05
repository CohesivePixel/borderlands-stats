<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class FSDataController extends Controller
{
    public function index()
    {
        // GET /fsdata
        $fsdata = App\FSData::get();
        return $fsdata;
    }

    public function edit(Request $request)
    {
        // GET /fsdata/edit
        $system_id = App\FSData::getSystemId($request->system_selection);
        $faction_name = $request->faction_selection;
        $previous_influence = App\FSData::where('fsd_contains_faction_name', $faction_name)
            ->where('fsd_system_id', $system_id)
            ->pluck('fsd_faction_influence');

        $update_faction_fsd = App\FSData::updateOrCreate(
            ['fsd_system_id' => $system_id, 'fsd_contains_faction_name' => $faction_name],
            [
                'fsd_system_id' => $system_id[0],
                'fsd_contains_faction_name' => $faction_name,
                'fsd_faction_influence' => $request->new_influence,
                'fsd_faction_previous_influence' => $previous_influence
            ]
        );

        $update_faction_states = App\Faction::where('faction_name', $request->faction_selection)->first();
        $update_faction_states->faction_pending_state = $request->pending_state;
        $update_faction_states->faction_current_state = $request->current_state;
        $update_faction_states->faction_recovering_state = $request->recovering_state;
        $update_faction_states->save();

        $update_current_order_id = App\System::where('system_id', $system_id)->first();
        $update_current_order_id->system_current_order_id = $request->system_add_current_order_id;
        $update_current_order_id->save();

        return view('layouts.success', ['entity_name' => $faction_name]);
    }

    public function show()
    {
        $systemlist = App\System::all();
        $factionlist = App\Faction::all();
        $fsdlist = App\FSData::all();

        return view('showdata')->with('systems', $systemlist)->with('fsdlist', $fsdlist)->with('factions', $factionlist);
    }

}
