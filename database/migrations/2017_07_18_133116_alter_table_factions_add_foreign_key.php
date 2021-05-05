<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableFactionsAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factions', function (Blueprint $table) {
            $table->foreign('faction_home_system_id')->references('system_id')->on('systems')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->unique('faction_id');
            $table->unique('faction_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factions', function (Blueprint $table) {
            $table->dropForeign('factions_faction_home_system_id_foreign');
            $table->dropUnique('factions_faction_id_unique');
            $table->dropUnique('factions_faction_name_unique');
        });
    }
}
