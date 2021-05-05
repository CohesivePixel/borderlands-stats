<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faction extends Model
{
    protected $primaryKey = "faction_id";

    public static function getFactions($name)
    {
        $systemid = System::where('system_name', $name)->pluck('system_id');
        $factionnames = FSData::where('fsd_system_id', $systemid)->lists('fsd_contains_faction_name')->toArray();
        return $factionnames;
    }
}
