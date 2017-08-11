<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJakettsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaketts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('foto');
            $table->integer('harga');
            $table->integer('bahanjakets_id')->unsigned();
            $table->timestamps();

            $table->foreign('bahanjakets_id')->references('id')->on('bahanjakets')->onUpdate('cascade')->onDalate('cascade');

        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jaketts');
    }
}
