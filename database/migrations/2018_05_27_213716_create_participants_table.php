<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name');
          $table->string('email');
          $table->string('phone', 20);
          $table->string('password');
          $table->string('address')->default('0');
          $table->string('city', 50)->default('0');
          $table->string('state', 2)->default('0');
          $table->integer('zip')->default('0');

          $table->enum('activated', ['0', '1'])->default('0');
          $table->integer('premium')->default('0');
          $table->integer('card')->default('0');
          $table->integer('cvc')->default('0');
          $table->integer('expire')->default('0');

          $table->rememberToken();
          $table->timestamps();

          $table->unique(["id"], 'id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participants');
    }
}
