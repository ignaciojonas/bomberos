<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBomberoServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bombero_servicio', function (Blueprint $table) {
            $table->integer('servicio_id')->unsigned();
            $table->integer('bombero_id')->unsigned();
            $table->primary(['servicio_id', 'bombero_id']);
            $table->timestamps();
            $table->foreign('servicio_id')->references('id')->on('servicio')->onDelete('cascade');
            $table->foreign('bombero_id')->references('id')->on('bombero')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bombero_servicio');
    }
}
