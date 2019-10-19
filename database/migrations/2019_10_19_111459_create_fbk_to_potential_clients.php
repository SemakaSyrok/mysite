<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFbkToPotentialClients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('potential_clients', function (Blueprint $table) {
            $table->foreign('group_of_clients_id')
                ->on('group_of_clients')
                ->references('id')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('potential_clients', function (Blueprint $table) {
            $table->dropForeign('group_of_clients');
        });
        Schema::dropIfExists('fbk_to_potential_clients');
    }
}
