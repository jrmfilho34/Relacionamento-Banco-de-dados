<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('User')->onDelete('cascade');
            $table->string('produto_id');
            $table->foreign('produto_id')->references('id')->on('produto')->onDelete('cascade');
            $table->decimal('quantidade',6,2);
            $table->string('desconto');
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
        Schema::dropIfExists('pedidos');
    }
}
