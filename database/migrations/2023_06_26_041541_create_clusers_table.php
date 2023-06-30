<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clusers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('profession');
            $table->string('jobTitle');
            $table->string('phone');
            $table->string('email');
            $table->string('city');
            $table->string('country');
            $table->string('zipCode');
            $table->text('opening');
            $table->text('body');
            $table->text('closing');
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
        Schema::dropIfExists('clusers');
    }
}
