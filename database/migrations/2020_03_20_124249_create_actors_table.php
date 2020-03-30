<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actors', function (Blueprint $table) {
            //Estruturando a tabela actors
            $table->id();
            $table->string('first_name', 100);
            $table->string('last_name', 100);
            $table->decimal('rating', 3, 1)->nullable(); //exp. 100.5 e não pode 100.51
            $table->bigInteger('favorite_movie_id')->unsigned()->nullable(); 

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
        Schema::dropIfExists('actors');
    }
}
