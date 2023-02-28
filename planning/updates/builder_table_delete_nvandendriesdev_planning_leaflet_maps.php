<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNvandendriesdevPlanningLeafletMaps extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nvandendriesdev_planning_leaflet_maps');
    }
    
    public function down()
    {
        Schema::create('nvandendriesdev_planning_leaflet_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('maxzoom')->default(18);
            $table->string('mapboxid', 255);
            $table->string('mapboxaccesstoken', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
