<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOldDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('old_data', function (Blueprint $table) {
            $table->id();
            $table->string('token')->nullable();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('new_data_id')->nullable();
            $table->foreign('new_data_id')->references('id')->on('new_data')->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('old_data');
    }
}
