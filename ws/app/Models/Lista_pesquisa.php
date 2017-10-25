<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lista_pesquisa extends Model {

    protected $fillable = ['codigo', 'quantidade', 'nome', 'user'];
    public $rules = [
        'codigo' => 'required|numeric',
        'nome' => 'required|min:3|max:50',
        'quantidade' => 'required|numeric',
        'user' => 'required|numeric',
    ];

}
