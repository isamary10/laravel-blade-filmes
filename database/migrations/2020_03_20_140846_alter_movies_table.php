<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function(Blueprint $table){
            $table->float('value_tickets');//criando
            $table->string('title', 200)->change();//alterando
            $table->dropColumn('awards');//dropando
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function(Blueprint $table) {
            $table->dropColumn('value-tickets');
            $table->string('title', 500)->chance();
            $table->integer('awards')->unsigned();
        });
    }
}
