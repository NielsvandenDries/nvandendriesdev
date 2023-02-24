<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningParken extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_parken', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('naam');
            $table->string('adres');
            $table->string('telefoonnummer');
            $table->string('emailadres');
            $table->string('gpslocatie')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_parken');
    }
}
