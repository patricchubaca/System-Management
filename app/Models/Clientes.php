<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'cliente',
        'uasg',
        'cnpj',
        'inscricaoEstadual',
        'isentoIE',
        'observacaoes',
        'rua',
        'bairro',
        'cidade',
        'numero',
        'cep',
        'contato1',
        'telefone1',
        'email1',
        'cargoSetor1',
        'contato2',
        'telefone2',
        'email2',
        'cargoSetor2',
        'observacoes'
    ];
}
