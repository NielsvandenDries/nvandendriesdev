<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningTapkasten extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_tapkasten', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('locatie');
            $table->string('closest_adres');
            $table->string('visual_state');
            $table->binary('picture');
            $table->string('comment')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_tapkasten');
    }
}
