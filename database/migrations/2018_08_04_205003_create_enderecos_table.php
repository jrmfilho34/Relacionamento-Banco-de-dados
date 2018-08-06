<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('User')->onDelete('cascade');
            $table->enum('entrega', ['S', 'N']);
            $table->string('cidade');
            $table->string('bairro');
            $table->string('rua');
            $table->string('CEP');
            $table->string('Telefone');
            $table->ipAddress('visitor');
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
        Schema::dropIfExists('enderecos');
    }
}
