<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDb8 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->string('cp_naam', 255);
            $table->string('cp_nummer', 255);
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->dropColumn('cp_naam');
            $table->dropColumn('cp_nummer');
        });
    }
}
