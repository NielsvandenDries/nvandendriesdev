<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningDevelopment extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_development', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('taak');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('status');
            $table->string('toegewezen');
            $table->string('opmerkingen');
            $table->string('bug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_development');
    }
}
