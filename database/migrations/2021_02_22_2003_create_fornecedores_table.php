<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedoresTable extends Migration
{
    
    public function up()
    {
        Schema::create('fornecedores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_fantasia');
            $table->string('cnpj');
            $table->string('estado');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('fornecedores');
    }
}
