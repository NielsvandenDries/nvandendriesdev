<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNvandendriesdevPlanningRelatie extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nvandendriesdev_planning_relatie');
    }
    
    public function down()
    {
        Schema::create('nvandendriesdev_planning_relatie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('groepversterker');
        });
    }
}
