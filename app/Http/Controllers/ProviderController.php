<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provider;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Client::all();


        foreach ($all as $key => $value) {

            $registro = [];

            $registro['id'] = $value['id'];
            $registro['client'] = $value['client'];
            $registro['uasg'] = $value['tipo'];
            $registro['cnpj'] = $value['formula'];

            $id = $value['id'];

            $registro['button'] = '<button class="button is-info is-light" onclick="visualisarUsuario('.$id.')" id="modal" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar</button>

            <button class="button is-danger is-light" onclick="deletarUsuario('.$id.')">Delete</button>';
            $data[] = $registro;
        }

        return ['data'=>$data];   
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
