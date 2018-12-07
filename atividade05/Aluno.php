<?php

namespace App;
use App\Cidade;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{


  protected $fillable = [ 'nome', 'matricula','email','cidade_id' ];
  //protected $guarded = ['senha'];


    public function cidade(){
      return $this->belongsTo('App\Cidade');

    }


}
