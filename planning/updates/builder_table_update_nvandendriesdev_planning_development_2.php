<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDevelopment2 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_development', function($table)
        {
            $table->string('leverancier');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_development', function($table)
        {
            $table->dropColumn('leverancier');
        });
    }
}
