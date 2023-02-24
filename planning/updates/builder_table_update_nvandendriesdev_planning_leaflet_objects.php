<?php namespace NvandendriesDev\Planning\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevPlanningLeafletObjects extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_planning_leaflet_objects', function($table)
        {
            $table->integer('maps_id');
            $table->string('name', 255);
            $table->string('type', 42);
            $table->text('position');
            $table->text('parameters');
            $table->text('popup');
            $table->string('picture');
            $table->string('visual_status');
            $table->string('park');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_planning_leaflet_objects', function($table)
        {
            $table->dropColumn('maps_id');
            $table->dropColumn('name');
            $table->dropColumn('type');
            $table->dropColumn('position');
            $table->dropColumn('parameters');
            $table->dropColumn('popup');
            $table->dropColumn('picture');
            $table->dropColumn('visual_status');
            $table->dropColumn('park');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
