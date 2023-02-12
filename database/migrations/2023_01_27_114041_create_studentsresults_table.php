<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentsresults', function (Blueprint $table) {
            $table->id();
            $table->string('std_roll_no');
            $table->string('std_name');
            $table->string('std_gender');
            $table->string('std_address');
            $table->string('std_result');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentsresults');
    }
};
