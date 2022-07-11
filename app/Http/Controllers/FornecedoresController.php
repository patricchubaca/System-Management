<?php

namespace App\Http\Controllers;

use App\Models\Fornecedores;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todosFornecedores = Fornecedores::all();
        foreach ($todosFornecedores as $key => $value) {
            $registros = [];
            $registros['id'] = $value['id'];
            $registros['cnpj'] = $value['cnpj'];
            $registros['fornecedor'] = $value['fornecedor'];
            $registros['button'] = '
                <button class="button is-info is-light" onclick=" createFornecedores(' . $value['id'] . ')">
                    <i class="fa-solid fa-folder-closed"> </i>
                </button>
                <button class="button is-danger is-light" onclick="deleteFornecedores(' . $value['id'] . ')">
                    <i class="fa-solid fa-trash-can"> </i>
                </button>
            ';
            $data[] = $registros;
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
        return view('Fornecedores.novoFornecedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeRequestFornecedores = $request->all();
        Fornecedores::create($storeRequestFornecedores);
        return view('Fornecedores.todosFornecedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelFornecedores = new Fornecedores();
        $findFornecedores = $modelFornecedores->find($id);
      
        return view('Fornecedores.editeFornecedores',compact('findFornecedores'));
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
        $destroyFornecedores = Fornecedores::findOrFail($id)->delete();

        return $destroyFornecedores;
    }
}
