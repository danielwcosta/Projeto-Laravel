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

//1:1 hasOne();
//1:N hasMany();
//N:N belongsToMany();
    public function genero(){
      return $this->hasOne(Genero::class,'id','genre_id');
    }

    public function atores(){
      return $this->belongsToMany(Ator::class,'actor_movie','actor_id','movie_id');
    }
}
