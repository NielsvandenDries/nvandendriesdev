<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningRelatie extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_relatie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->text('groepversterker');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_relatie');
    }
}
