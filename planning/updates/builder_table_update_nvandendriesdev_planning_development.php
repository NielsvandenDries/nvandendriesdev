<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDevelopment extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_development', function($table)
        {
            $table->string('opmerkingen', 2048)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_development', function($table)
        {
            $table->string('opmerkingen', 255)->change();
        });
    }
}
