<?php

namespace App\Http\Controllers;

use App\Models\Cotacao;
use Illuminate\Http\Request;

class CotacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Cotacao::all();
        foreach ($all as $key => $value) {
            $registro = [];
            $registro['pasta'] = $value['pasta'];
            $registro['button'] = '
                <button class="button is-info is-light" onclick="createCotacao(' . $value['pasta'] . ')">
                    <i class="fa-solid fa-folder-closed"> </i>
                </button>
                <button class="button is-danger is-light" onclick="deleteCotacao(' . $value['pasta'] . ')">
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
        return view('Cotacao.novoCotacao');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modelCotacao =  new Cotacao();
        $requestCotacao = $request->all();
        $modelCotacao::created($requestCotacao);
        return view('Cotacao.todosCotacao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelCotacao = new Cotacao();
        $findCotacao = $modelCotacao->find($id);
        return view('Cotacao.editeCotacao',compact('findCotacao'));
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
        $newMarca = Cotacao::find($request->id);
        $newMarca->portal = $request->portal;
        $newMarca->cliente = $request->cliente;
        $newMarca->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroyCotacao = Cotacao::findOrFail($id)->delete();

        return $destroyCotacao;
    }
}
