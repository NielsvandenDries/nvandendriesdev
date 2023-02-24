<?php namespace NvandendriesDev\Helpcenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevHelpcenterItem extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->string('help_titel');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->dropColumn('help_titel');
        });
    }
}
