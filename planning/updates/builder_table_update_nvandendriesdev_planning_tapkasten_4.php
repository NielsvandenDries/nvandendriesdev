<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningTapkasten4 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->string('partial');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->dropColumn('partial');
        });
    }
}
