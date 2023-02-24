<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDevelopmentstatus extends Migration
{
    public function up()
    {
        Schema::rename('nvandendriesdev_planning_development', 'nvandendriesdev_planning_developmentstatus');
    }
    
    public function down()
    {
        Schema::rename('nvandendriesdev_planning_developmentstatus', 'nvandendriesdev_planning_development');
    }
}
