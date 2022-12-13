<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('paylasims', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('category_id');
            $table->string('user_id');
            $table->integer('view_count');
            $table->boolean('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('paylasims');
    }
};
