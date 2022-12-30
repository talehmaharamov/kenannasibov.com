<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paylasim_photos', function (Blueprint $table) {
            $table->id();
            $table->integer('paylasim_id');
            $table->text('photo');

        });
    }
    public function down()
    {
        Schema::dropIfExists('paylasim_photos');
    }
};
