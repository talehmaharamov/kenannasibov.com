<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('paylasim_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paylasim_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->longText('content');
            $table->unique(['paylasim_id', 'locale']);
            $table->foreign('paylasim_id')->references('id')->on('paylasims')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('paylasim_translations');
    }
};
