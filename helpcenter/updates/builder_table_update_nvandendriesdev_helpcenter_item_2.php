<?php namespace NvandendriesDev\Helpcenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevHelpcenterItem2 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->text('categorie');
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->dropColumn('categorie');
        });
    }
}
