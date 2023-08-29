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
        Schema::create('shift_allocations', function (Blueprint $table) {
            $table->id();
            $table->integer('staff_id');
            $table->string('staffname');
            $table->string('shift_name');
            $table->string('shift_starting_time')->nullable();
            $table->string('shift_ending_time')->nullable();
            $table->string('shift_starting_date')->nullable();
            $table->string('shift_ending_date')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('shift_allocations');
    }
};
