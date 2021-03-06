<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $all = Produtos::all();
     foreach ($all as $key => $value) {
        $registro = [];
        $registro['id'] = $value['id'];
        $registro['produto'] = $value['produto'];
        $registro['marca'] = $value['marca'];
        $id = $value['id'];
        $registro['button'] = '
            <button class="button is-info is-light" onclick="createProdutos('.$value['id'].')"> 
                <i class="fa-solid fa-folder-closed"> </i> 
            </button>
            <button class="button is-danger is-light" onclick="deleteProdutos('.$value['id'].')"> 
                <i class="fa-solid fa-trash-can"> </i>
            </button>
        ';
        
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
        return view('Produtos.novoProduto');
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
        Produtos::create($requestProdutos);
        return view('Produtos.todosProdutos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function show(Produtos $id)
    {
        $modelProdutos = new Produtos();
        $findProdutos = $modelProdutos->find($id);
        
        return view('Produtos.editeProduto', compact('findProdutos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function edit(Produtos $produtos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produtos $produtos)
    {
        $newProduto =  Produtos::find($request->id);
        $newProduto->marca = $request->marca;
        $newProduto->produto = $request->produto;
        $newProduto->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produtos  $produtos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produtos $id)
    {
        $destroyProdutos = Produtos::findOrFail($id)->delete();
        return $destroyProdutos;
    }
}
