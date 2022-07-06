<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
  use HasFactory;


  protected $table = 'empresas';

  protected $primaryKey = 'id';

  public $timestamps = false;


  protected $fillable =[

     'id',
     'razaoSocial',
     'inscricaoEstadual',
     'cnpj',
     'rua',
     'bairro',
     'cidade',
     'cep',
     'telefone',
     'email'
  ];

}
