<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use Illuminate\Http\Request;


class MarcasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
            $all = Marcas::all();
            foreach ($all as $key => $value) {
                $registro = [];
                $registro['id'] = $value['id'];
                $registro['marca'] = $value['marca'];
                $registro['produto'] = $value['produto'];
                $registro['button'] = '
                    <button class="button is-info is-light" onclick="createMarcas(' . $value['id'] . ')">
                        <i class="fa-solid fa-folder-closed"> </i>
                    </button>
                    <button class="button is-danger is-light" onclick="deleteMarcas(' .  $value['id'] . ')">
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
        return view('Marcas.novoMarcas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestProdutos = $request->all();  
        Marcas::create($requestProdutos);
        return view('Marcas.todosMarcas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelMarcas = new Marcas();
        $findMarcas = $modelMarcas->find($id);
        return view('Marcas.editeMarcas',compact('findMarcas'));
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
        $destroyMarcas = Marcas::findOrFail($id)->delete();

        return $destroyMarcas;
    }
}
