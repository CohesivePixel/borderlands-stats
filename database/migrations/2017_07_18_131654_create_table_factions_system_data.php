<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFactionsSystemData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factions_system_data', function (Blueprint $table) {
            $table->increments('fsd_id');
            $table->integer('fsd_system_id')->unsigned();
            $table->string('fsd_contains_faction_name', 50);
            $table->integer('fsd_faction_influence');
            $table->integer('fsd_faction_previous_influence');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factions_system_data');
    }
}
