<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('contenido');
            $table->timestamps();   
        });


        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('articulo_id');
            $table->string('comment');
            $table->timestamps();   
        });

        Schema::table('comentarios', function (Blueprint $table) {

        
            $table->foreign('articulo_id')
            ->references('id')->on('articulos')
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
        Schema::dropIfExists('comentarios');
    }
}
