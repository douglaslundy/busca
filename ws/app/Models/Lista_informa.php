<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista_informa extends Model {

    protected $fillable = ['codigo','user', 'quantidade', 'nome', 'preco', 'idEmpresa'];
    public $rules = [
        'codigo' => 'required|numeric',
        'nome' => 'required|min:3|max:50',
        'preco' => 'required',
        'quantidade' => 'required|numeric',
        'idEmpresa' => 'required|numeric',
        'user' => 'required|numeric',
    ];

}
