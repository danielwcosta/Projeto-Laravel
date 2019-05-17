<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';// variaveis tem que ter esses nomes primaryKey e $table
    protected $primaryKey = 'id'; // se primary key for 'id' não precisa chamar

    public function titleComRating() {
        return $this->title . ' (' . $this->rating . ')';
    }
}
