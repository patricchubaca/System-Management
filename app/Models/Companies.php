<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
  use HasFactory;


  protected $table = 'companies';

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
