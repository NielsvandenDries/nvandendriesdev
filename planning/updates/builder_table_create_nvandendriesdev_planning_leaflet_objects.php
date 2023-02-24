<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningLeafletObjects extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_leaflet_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_leaflet_objects');
    }
}
