<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterMoviesCriticaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function(Blueprint $table) {
            $table->text('critics');
            $table->renameColumn('length', 'duration');
            $table->dropColumn('rating');
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
            $table->dropColumn('crictics');
            $table->renameColumn('duration', 'length')->change;
            $table->decimal('rating', 3, 1);
        });
    }
}
