<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosterTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poster_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('poster_id');
            $table->unsignedBigInteger('country_id');
            $table->string('title');
            $table->mediumText('body');
            $table->timestamps();
        });

        Schema::table('poster_translations', function(Blueprint $table) {
           $table->foreign('country_id')
               ->on('countries')
               ->references('id')
               ->onDelete('CASCADE');

           $table->foreign('poster_id')
               ->on('posters')
               ->references('id')
               ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
//        Schema::table('poster_translations', function (Blueprint $table) {
//            $table->dropForeign('poster_id');
//            $table->dropForeign('country_id');
//        });
        Schema::dropIfExists('poster_translations');
    }
}
