<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDevelopmentstatus2 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_developmentstatus', function($table)
        {
            $table->string('archive', 255);
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_developmentstatus', function($table)
        {
            $table->dropColumn('archive');
        });
    }
}
