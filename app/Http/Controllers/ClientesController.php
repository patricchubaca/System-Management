<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Clientes;


class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Clientes::all();
        foreach ($all as $key => $value) {
            $registro = [];
            $registro['id'] = $value['id'];
            $registro['cliente'] = $value['cliente'];
            $registro['uasg'] = $value['uasg'];
            $registro['cnpj'] = $value['cnpj'];
            $registro['button'] = '
                <button class="button is-info is-light" onclick="createClientes(' . $value['id'] . ')">
                    <i class="fa-solid fa-folder-closed"> </i>
                </button>
                <button class="button is-danger is-light" onclick="deleteClientes(' . $value['id'] . ')">
                    <i class="fa-solid fa-trash-can"> </i>
                </button>
            ';
            $data[] = $registro;
        }

        return ['data' => $data];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clientes.novoCliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $diceClient = $request->all();
        Clientes::create($diceClient);
        return view('Clientes.todosCliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelCliente = new Clientes();
        $findCliente = $modelCliente->find($id);
        return view('Clientes.editeCliente', compact('findCliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newCliente =  Clientes::find($request->id);
        $newCliente->cliente = $request->cliente;
        $newCliente->uasg = $request->usag;
        $newCliente->cnpj = $request->cnpj;
        $newCliente->inscricaoEstadual = $request->inscricaoEstadual;
        $newCliente->isentoIE = $request->isentoIE;
        $newCliente->observacaoes = $request->observacaoes;
        $newCliente->rua = $request->rua;
        $newCliente->bairro = $request->bairro;
        $newCliente->cidade = $request->cidade;
        $newCliente->numero = $request->numero;
        $newCliente->cep = $request->cep;
        $newCliente->contato1 = $request->contato1;
        $newCliente->telefone1 = $request->telefone1;
        $newCliente->email1 = $request->email1;
        $newCliente->cargoSetor1 = $request->cargoSetor1;
        $newCliente->contato2 = $request->contato2;
        $newCliente->telefone2 = $request->telefone2;
        $newCliente->email2 = $request->email2;
        $newCliente->cargoSetor2 = $request->cargoSetor2;
        $newCliente->observacoes = $request->observacoes;
        $newCliente->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyClientes = Clientes::findOrFail($id)->delete();

        return $destroyClientes;
    }
}
