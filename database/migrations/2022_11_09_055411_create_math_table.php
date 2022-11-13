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
        Schema::create('math', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('1_1_1');$table->boolean('1_1_2');$table->boolean('1_1_3');
            $table->boolean('1_2_1');$table->boolean('1_2_2');$table->boolean('1_2_3');
            $table->boolean('1_3_1');$table->boolean('1_3_2');$table->boolean('1_3_3');
            $table->boolean('1_4_1');$table->boolean('1_4_2');$table->boolean('1_4_3');
            $table->boolean('1_5_1');$table->boolean('1_5_2');$table->boolean('1_5_3');
            $table->boolean('2_1_1');$table->boolean('2_1_2');$table->boolean('2_1_3');
            $table->boolean('2_2_1');$table->boolean('2_2_2');$table->boolean('2_2_3');
            $table->boolean('2_3_1');$table->boolean('2_3_2');$table->boolean('2_3_3');
            $table->boolean('2_4_1');$table->boolean('2_4_2');$table->boolean('2_4_3');
            $table->boolean('2_5_1');$table->boolean('2_5_2');$table->boolean('2_5_3');
            $table->boolean('3_1_1');$table->boolean('3_1_2');$table->boolean('3_1_3');
            $table->boolean('3_2_1');$table->boolean('3_2_2');$table->boolean('3_2_3');
            $table->boolean('3_3_1');$table->boolean('3_3_2');$table->boolean('3_3_3');
            $table->boolean('3_4_1');$table->boolean('3_4_2');$table->boolean('3_4_3');
            $table->boolean('3_5_1');$table->boolean('3_5_2');$table->boolean('3_5_3');
            $table->boolean('3_6_1');$table->boolean('3_6_2');$table->boolean('3_6_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('math');
    }
};
