<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genres';
    protected $primaryKey = 'id';

    public function nameComRanking(){
      return $this->name . ' (' . $this->ranking . ')';
    }
}
