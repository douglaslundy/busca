<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {

    protected $fillable = ['codigo', 'nome', 'um'];
    public $rules = [
        'codigo' => 'required|numeric',
        'nome' => 'required|min:3|max:50',
        'um' => 'max:2',
    ];
    
    public function rulesSearch()
    {
     return [
         'key-search' => 'required',
     ];   
    }
    
    public function search($data)
    {
        return $this->where('codigo', $data['key-search'])
                      ->orWhere('nome', 'LIKE', "%{$data['key-search']}%")
                              ->paginate(10);
    }
}
