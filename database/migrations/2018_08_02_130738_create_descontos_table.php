<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescontosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('descontos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->decimal('desconto',6,2)->default(0);
            $table->dateTime('validade');
            $table->enum('ativo',['S','N'])->default('S');
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
        Schema::dropIfExists('descontos');
    }
}
