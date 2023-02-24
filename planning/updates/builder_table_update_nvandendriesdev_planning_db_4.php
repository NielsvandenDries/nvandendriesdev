<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDb4 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->string('tap_locatie');
            $table->string('closest_adres');
            $table->string('visual_state');
            $table->binary('tap_picture')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->dropColumn('tap_locatie');
            $table->dropColumn('closest_adres');
            $table->dropColumn('visual_state');
            $table->dropColumn('tap_picture');
        });
    }
}
