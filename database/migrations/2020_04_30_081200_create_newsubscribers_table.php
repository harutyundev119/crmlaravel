<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newsubscribers', function (Blueprint $table) {
            $table->id();
            $table->text('userid');
            $table->text('cratmane');
            $table->text('state');
            $table->text('region');
            $table->text('building');
            $table->text('street');
            $table->text('apartment');
            $table->text('phone');
            $table->text('problem');
            $table->text('available');
            $table->text('adddate');
            $table->text('comment');
            $table->text('manwork');
            $table->text('group');
            $table->text('problemothercomment');
            $table->text('status');
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
        Schema::dropIfExists('newsubscribers');
    }
}
