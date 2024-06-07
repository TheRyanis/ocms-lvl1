<?php namespace App\Arrivals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAppArrivals extends Migration
{
    public function up()
    {
        Schema::create('app_arrivals_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->text('reason');
            $table->timestamp('created_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('app_arrivals_');
    }
}
