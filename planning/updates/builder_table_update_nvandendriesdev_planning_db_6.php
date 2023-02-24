<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDb6 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->dropColumn('tap_locatie');
            $table->dropColumn('closest_adres');
            $table->dropColumn('visual_state');
            $table->dropColumn('tap_picture');
            $table->dropColumn('tap_opmerking');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->string('tap_locatie', 255);
            $table->string('closest_adres', 255);
            $table->string('visual_state', 255);
            $table->binary('tap_picture')->nullable();
            $table->string('tap_opmerking', 255)->nullable();
        });
    }
}
