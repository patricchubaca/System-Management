<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    
    protected $table = 'providers';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [

        'id',
        'razaoSocial',
        'cnpj',
        'isento',
        'inscricaoEstadual',
        'site',
        'pedidoMinimo',
        'observacoes',
        'cidade',
        'cep',
        'contato1',
        'telefone1',
        'email1',
        'cargoSetor1',
        'contato2',
        'telefone2',
        'email2',
        'cargoSetor2'    

    ];
}
