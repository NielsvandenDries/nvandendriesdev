<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevPlanningWerkbonnen extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('engineer_name');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->integer('pof');
            $table->integer('cable');
            $table->integer('verloop');
            $table->integer('fconnectorkoppel');
            $table->integer('verloophaaks');
            $table->integer('wcd');
            $table->integer('opbouwraamwcd');
            $table->integer('versterker');
            $table->integer('coaxmale');
            $table->integer('fconnector');
            $table->integer('3mfconkabel');
            $table->integer('3mtvkabeliec');
            $table->integer('5mtvkabel4g');
            $table->integer('verstkabel');
            $table->integer('modem');
            $table->integer('arbeid');
            $table->text('overigmateriaal');
            $table->string('signature');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_planning_werkbonnen');
    }
}
