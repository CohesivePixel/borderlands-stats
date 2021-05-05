<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FSData extends Model
{
    protected $table = "factions_system_data";
    protected $fillable = ['fsd_system_id', 'fsd_contains_faction_name', 'fsd_faction_influence', 'fsd_faction_previous_influence'];

    protected $primaryKey = "fsd_id";

    public static function getSystemId($name)
    {
        $systemid = System::where('system_name', $name)->pluck('system_id');
        return $systemid;
    }
}
