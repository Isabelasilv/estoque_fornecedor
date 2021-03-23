<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['descricao', 'complemento', 'quantidade'];

    public function Fornecedor ()
{

   return $this->hasOne (Fornecedor::class);

   }
}