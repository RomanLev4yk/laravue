<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Modules\Movie\Enums\MovieGenre;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->index();
            $table->string('year', 4);
            $table->string('producer', 50);
            $table->float('fees');
            $table->ENUM('genre', [MovieGenre::getValues()])->default(MovieGenre::ACTION_GENRE);
            $table->float('rateIMDB')->nullable();
            $table->string('description', 255)->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
