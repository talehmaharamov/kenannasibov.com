<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('director_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('director_id')->unsigned();
            $table->string('locale')->index();
            $table->string('name');
            $table->string('position');
            $table->unique(['director_id', 'locale']);
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('director_translations');
    }
};
