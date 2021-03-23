<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('complemento');
            $table->string('quantidade');

            $table->unsignedBigInteger('fornecedorid')->unsigned();
            $table->foreign('fornecedorid')->references('id')->on('fornecedores')->onDelete("cascade");
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
