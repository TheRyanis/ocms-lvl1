<?php namespace App\Arrivals\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateArrivalsTable Migration
 */
class CreateArrivalsTable extends Migration
{
    public function up()
    {
        Schema::create('app_arrivals_arrivals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('app_arrivals_arrivals');
    }
}
