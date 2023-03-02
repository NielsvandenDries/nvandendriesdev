<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningWerkbonnen extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->integer('pof')->nullable()->change();
            $table->integer('cable')->nullable()->change();
            $table->integer('verloop')->nullable()->change();
            $table->integer('fconnectorkoppel')->nullable()->change();
            $table->integer('verloophaaks')->nullable()->change();
            $table->integer('wcd')->nullable()->change();
            $table->integer('opbouwraamwcd')->nullable()->change();
            $table->integer('versterker')->nullable()->change();
            $table->integer('coaxmale')->nullable()->change();
            $table->integer('fconnector')->nullable()->change();
            $table->integer('3mfconkabel')->nullable()->change();
            $table->integer('3mtvkabeliec')->nullable()->change();
            $table->integer('5mtvkabel4g')->nullable()->change();
            $table->integer('verstkabel')->nullable()->change();
            $table->integer('modem')->nullable()->change();
            $table->integer('arbeid')->nullable()->change();
            $table->text('overigmateriaal')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->integer('pof')->nullable(false)->change();
            $table->integer('cable')->nullable(false)->change();
            $table->integer('verloop')->nullable(false)->change();
            $table->integer('fconnectorkoppel')->nullable(false)->change();
            $table->integer('verloophaaks')->nullable(false)->change();
            $table->integer('wcd')->nullable(false)->change();
            $table->integer('opbouwraamwcd')->nullable(false)->change();
            $table->integer('versterker')->nullable(false)->change();
            $table->integer('coaxmale')->nullable(false)->change();
            $table->integer('fconnector')->nullable(false)->change();
            $table->integer('3mfconkabel')->nullable(false)->change();
            $table->integer('3mtvkabeliec')->nullable(false)->change();
            $table->integer('5mtvkabel4g')->nullable(false)->change();
            $table->integer('verstkabel')->nullable(false)->change();
            $table->integer('modem')->nullable(false)->change();
            $table->integer('arbeid')->nullable(false)->change();
            $table->text('overigmateriaal')->nullable(false)->change();
        });
    }
}
