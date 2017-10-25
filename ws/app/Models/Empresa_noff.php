<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa_noff extends Model {

    protected $fillable = ['razao', 'fantasia', 'cnpj',
        'cidade', 'rua', 'num', 'bairro', 'telefone', 'celular', 'user'];
    public $rules = [
        'razao' => 'max:100',
        'fantasia' => 'required|min:5|max:100',
        'rua' => 'required|min:1|max:50',
        'bairro' => 'required|min:3|max:50',
        'num' => 'required|numeric',
        'cidade' => 'required|numeric',
        'cnpj' => 'numeric',
        'telefone' => 'numeric',
        'celular' => 'numeric',
        'user' => 'required|numeric',
    ];

}
