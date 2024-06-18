<?php

namespace App\Arrival\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddIsLateToStudentLogsTable extends Migration
{
    public function up()
    {
        Schema::table('app_arrival_arrivals', function ($table) {
            $table->boolean('is_late')->default(false);
        });
    }

    public function down()
    {
        Schema::table('app_arrival_arrivals', function ($table) {
            $table->dropColumn('is_late');
        });
    }
}
