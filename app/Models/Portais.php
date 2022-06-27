<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portais extends Model
{
    use HasFactory;

        'id',
        'portal',
        'site',
        'login',
        'senha'
}
