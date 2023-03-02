<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningWerkbonnen3 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->string('park');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->dropColumn('park');
        });
    }
}
