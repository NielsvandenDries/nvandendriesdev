<?php namespace NvandendriesDev\Helpcenter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNvandendriesdevHelpcenterItem extends Migration
{
    public function up()
    {
        Schema::create('nvandendriesdev_helpcenter_item', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('help_text');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nvandendriesdev_helpcenter_item');
    }
}
