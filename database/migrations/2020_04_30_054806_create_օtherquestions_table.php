<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateօtherquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('օtherquestions', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('campnineam');
            $table->text('whoproblem');
            $table->text('whom');
            $table->text('registrar');
            $table->text('status');
            $table->text('date');
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
        Schema::dropIfExists('օtherquestions');
    }
}
