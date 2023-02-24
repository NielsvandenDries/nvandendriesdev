<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningParken extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_parken', function($table)
        {
            $table->string('park_naam', 255);
            $table->string('park_adres', 255);
            $table->string('park_telefoonnummer', 255);
            $table->string('park_emailadres', 255);
            $table->renameColumn('id', 'park_id');
            $table->renameColumn('gpslocatie', 'park_gpslocatie');
            $table->dropColumn('naam');
            $table->dropColumn('adres');
            $table->dropColumn('telefoonnummer');
            $table->dropColumn('emailadres');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_parken', function($table)
        {
            $table->dropColumn('park_naam');
            $table->dropColumn('park_adres');
            $table->dropColumn('park_telefoonnummer');
            $table->dropColumn('park_emailadres');
            $table->renameColumn('park_id', 'id');
            $table->renameColumn('park_gpslocatie', 'gpslocatie');
            $table->string('naam', 255);
            $table->string('adres', 255);
            $table->string('telefoonnummer', 255);
            $table->string('emailadres', 255);
        });
    }
}
