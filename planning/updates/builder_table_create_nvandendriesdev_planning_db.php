<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningDb extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_db', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('adres');
            $table->date('date');
            $table->time('time')->nullable();
            $table->string('taak');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_db');
    }
}
