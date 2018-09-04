<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('created_by');
            $table->string('event_name', 255);
            $table->string('sport', 50);
            $table->string('type', 12);
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time');
            $table->string('start_tod', 2);
            $table->time('end_time');
            $table->string('end_tod', 2);
            $table->string('age', 10);
            $table->string('gender', 10);
            $table->string('link', 255);
            $table->text('description');
            $table->string('address')->default('0');
            $table->string('city', 50)->default('0');
            $table->string('state', 2)->default('0');
            $table->integer('zip')->default('0');
            $table->integer('premiumAdd')->default('0');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertisements');
    }
}
