<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

     protected $table = 'produtos';

     protected $primaryKey = 'id';

     public $timestamps = false;

    protected $fillable =[
         'id',
         'produto',
         'marca'   
    ];
}
