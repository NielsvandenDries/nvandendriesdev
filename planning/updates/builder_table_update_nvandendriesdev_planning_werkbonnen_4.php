<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningWerkbonnen4 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->string('engineer_name', 255)->nullable()->change();
            $table->string('customer_name', 255)->nullable()->change();
            $table->string('customer_address', 255)->nullable()->change();
            $table->string('signature', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_werkbonnen', function($table)
        {
            $table->string('engineer_name', 255)->nullable(false)->change();
            $table->string('customer_name', 255)->nullable(false)->change();
            $table->string('customer_address', 255)->nullable(false)->change();
            $table->string('signature', 255)->nullable(false)->change();
        });
    }
}
