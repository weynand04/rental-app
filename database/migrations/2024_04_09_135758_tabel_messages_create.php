<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up()
    {
        Schema::create('message', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('subject');
            $table->string('pesan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('message');
    }
};
