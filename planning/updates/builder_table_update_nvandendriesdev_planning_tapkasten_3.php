<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningTapkasten3 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->string('picture', 255)->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->binary('picture')->nullable(false)->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
