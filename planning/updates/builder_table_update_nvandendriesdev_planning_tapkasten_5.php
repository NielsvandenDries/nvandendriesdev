<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningTapkasten5 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->renameColumn('partial', 'park');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->renameColumn('park', 'partial');
        });
    }
}
