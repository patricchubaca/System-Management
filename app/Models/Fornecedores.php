<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedores extends Model
{
    use HasFactory;

    protected $table = 'fornecedores';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [

        'id',
        'fornecedor',
        'cnpj',
        'isento',
        'inscricaoEstadual',
        'site', 
        'pedidoMinimo',
        'observacoes',
        'endereço ',
        'bairro', 
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
