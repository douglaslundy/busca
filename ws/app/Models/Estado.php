<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {

    public function cidade() {
        return $this->hasMany('App\Models\Cidade', 'idEstado')->where('Ativo', 1);
    }

}
