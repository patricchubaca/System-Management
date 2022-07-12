<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portais extends Model
{
  use HasFactory;

  protected $table = 'portais';

  protected $primaryKey = 'id';

  public $timestamps = false;

  protected $fillable =[
     'id',
     'portal',
     'site',
     'login',
     'senha'
  ];

}
