<?php

namespace App\Http\Controllers;

use App\Models\Portais;
use Illuminate\Http\Request;

class CanaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //createCanais
        $all = Portais::all();
        foreach ($all as $key => $value) {
            $registro = [];
            $registro['id'] = $value['id'];
            $registro['cnpj'] = $value['cnpj'];
            $registro['button'] = '
                <button class="button is-info is-light"onclick=" createCanais(' . $value['id'] . ')">
                    <i class="fa-solid fa-folder-closed"> </i>
                </button>
                <button class="button is-danger is-light" onclick="deletarCanais(' . $value['id'] . ')">
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
        return view('Canais.novoCanaisCompras');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestCanais = $request->all();
        Portais::created($requestCanais);
        return view('Canais.todosCanaisCompras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelCanais = new Portais();
        $findCanais = $modelCanais->find($modelCanais);
        return view('Canais.editeCanais',compact('findCanais'));
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
        $destroyPortais = Portais::findOrFail($id)->delete();

        return $destroyPortais;
    }
}
