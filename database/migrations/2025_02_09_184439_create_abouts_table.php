<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            // About image: store the relative path (e.g., "abouts/about.jpg")
            $table->string('image')->nullable();
            // Main article text (the right column)
            $table->longText('article');
            // Two quick lists (the left column checklists)
            // Here, we'll store them as plain text (each item separated by a newline).
            $table->text('service_list_left');
            $table->text('service_list_right');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
