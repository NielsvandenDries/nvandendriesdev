<?php namespace NvandendriesDev\Helpcenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevHelpcenterItem3 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->text('tags')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->dropColumn('tags');
        });
    }
}
