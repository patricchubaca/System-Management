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
        //
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
