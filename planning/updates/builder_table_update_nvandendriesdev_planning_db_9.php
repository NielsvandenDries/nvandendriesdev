<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningDb9 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->string('status', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_db', function($table)
        {
            $table->text('status')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
