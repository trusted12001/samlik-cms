<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            // Category used for filtering (e.g., "architecture", "interior", "workspace", "office")
            $table->string('category');
            // Full image for previewing (large image)
            $table->string('full_image');
            // Thumbnail image for the grid
            $table->string('thumb_image');
            // Project date
            $table->date('date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
