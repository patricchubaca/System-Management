<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [

        'id',
        'uasg',
        'cnpj',
        'isento',
        'inscricaoEstadual',
        'observacaoes',
        'endereco',
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
