<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningWerkbonnen2 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->string('werkbonnaam');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->dropColumn('werkbonnaam');
        });
    }
}
