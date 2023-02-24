<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDb extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->dateTime('datum')->nullable();
            $table->dropColumn('date');
            $table->dropColumn('time');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->dropColumn('datum');
            $table->date('date');
            $table->time('time')->nullable();
        });
    }
}
