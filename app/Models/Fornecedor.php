<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $fillable = ['nome_fantasia', 'cnpj', 'estado'];
    
    public function Fornecedor()
{

   return $this->hasOne (Produto::class);
}
   }
