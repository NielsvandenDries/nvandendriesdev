<?php namespace NvandendriesDev\Helpcenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNvandendriesdevHelpcenterItem4 extends Migration
{
    public function up()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->string('confluence')->nullable();
            $table->string('tags')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->dropColumn('confluence');
            $table->text('tags')->nullable()->unsigned(false)->default(null)->comment(null)->change();
        });
    }
}
