<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningLeafletMaps extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_leaflet_maps', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->integer('maxzoom');
            $table->string('mapboxid');
            $table->string('mapboxaccesstoken');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_leaflet_maps');
    }
}
