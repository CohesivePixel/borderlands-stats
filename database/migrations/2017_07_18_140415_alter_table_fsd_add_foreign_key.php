<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableFsdAddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('factions_system_data', function (Blueprint $table) {
            $table->foreign('fsd_system_id')->references('system_id')->on('systems')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table->foreign('fsd_contains_faction_name')->references('faction_name')->on('factions')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factions_system_data', function (Blueprint $table) {
            $table->dropForeign('factions_system_data_fsd_system_id_foreign');
            $table->dropForeign('factions_system_data_fsd_contains_faction_name_foreign');
        });
    }
}
