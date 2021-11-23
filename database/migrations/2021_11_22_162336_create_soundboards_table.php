<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoundboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soundboards', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("title");
            $table->string("audio_path");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("artist_id");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("artist_id")->references("id")->on("artists");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soundboards');
    }
}
