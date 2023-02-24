<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNvandendriesdevPlanningParken extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nvandendriesdev_planning_parken');
    }
    
    public function down()
    {
        Schema::create('nvandendriesdev_planning_parken', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('park_id')->unsigned();
            $table->string('park_gpslocatie', 255)->nullable();
            $table->string('park_naam', 255);
            $table->string('park_adres', 255);
            $table->string('park_telefoonnummer', 255);
            $table->string('park_emailadres', 255);
        });
    }
}
