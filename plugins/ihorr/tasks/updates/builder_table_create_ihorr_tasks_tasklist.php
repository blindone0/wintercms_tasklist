<?php namespace Ihorr\Tasks\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateIhorrTasksTasklist extends Migration
{
    public function up()
    {
        Schema::create('ihorr_tasks_tasklist', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('task');
            $table->string('responsible');
            $table->dateTime('deadline');
            $table->string('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ihorr_tasks_tasklist');
    }
}
