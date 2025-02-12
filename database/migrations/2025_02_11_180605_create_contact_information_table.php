<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInformationTable extends Migration
{
    public function up()
    {
        Schema::create('contact_information', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('website');
            $table->string('phone');
            $table->string('email');
            $table->text('map')->nullable(); // Embed code or map link
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contact_information');
    }
}
