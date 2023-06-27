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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company',50);
            $table->string('slug', 50)->nullable();
            $table->string('departure_station',100);
            $table->string('arrival_station',100);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code',10);
            $table->TinyInteger('carriage_number')->default(8);
            $table->boolean('on_time')->default(1);
            $table->boolean('cancelled')->default(1);
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
        Schema::dropIfExists('trains');
    }
};
