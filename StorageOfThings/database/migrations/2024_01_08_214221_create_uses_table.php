<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsesTable extends Migration
{
    public function up()
    {
        Schema::create('uses', function (Blueprint $table) {
            $table->foreignId('thing_id')->constrained();
            $table->foreignId('place_id')->constrained();
            $table->unsignedBigInteger('user_id');
            $table->integer('amount')->default(1);
            $table->timestamps();

            $table->primary(['thing_id', 'place_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('uses');
    }
}