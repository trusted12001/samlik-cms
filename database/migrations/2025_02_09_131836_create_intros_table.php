<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntrosTable extends Migration
{
    public function up()
    {
        Schema::create('intros', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            // Store the image path relative to the storage/app/public directory
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('intros');
    }
}
