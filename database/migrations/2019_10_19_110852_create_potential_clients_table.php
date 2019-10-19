<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePotentialClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potential_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('namee');
            $table->string('email');
            $table->string('description')->nullable();
            $table->string('website')->nullable();
            $table->unsignedBigInteger('group_of_clients_id');
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
        Schema::dropIfExists('potential_clients');
    }
}
