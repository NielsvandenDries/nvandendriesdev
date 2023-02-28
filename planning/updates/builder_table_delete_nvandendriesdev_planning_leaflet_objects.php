<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNvandendriesdevPlanningLeafletObjects extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nvandendriesdev_planning_leaflet_objects');
    }
    
    public function down()
    {
        Schema::create('nvandendriesdev_planning_leaflet_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('maps_id')->nullable()->unsigned();
            $table->string('name', 255);
            $table->string('type', 42);
            $table->text('position');
            $table->text('parameters');
            $table->text('popup');
            $table->string('picture', 255);
            $table->string('visual_status', 255);
            $table->string('park', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('splitters', 100)->nullable();
            $table->string('Taps', 100)->nullable();
            $table->string('versterkers', 100)->nullable();
        });
    }
}
