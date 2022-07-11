<?php

namespace App\Http\Controllers;

use App\Models\Portais;
use Illuminate\Http\Request;

class PortaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           $all = Portais::all();
           foreach ($all as $key => $value) {
            $registro = [];
            $registro['id'] = $value['id'];
            $registro['login'] = $value['login'];
            $registro['portal'] = $value['portal'];
            $registro['button'] = '
                <button class="button is-info is-light" onclick="createPortais('.$value['id'].')" >
                <i class="fa-solid fa-folder-closed"> </i> 
                </button>
                <button class="button is-danger is-light" onclick="deletePortais('.$value['id'].')">
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
        return view('Portais.novoPortal');
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
        Portais::create($requestProdutos);
        return view('Canais.todosCanaisCompras');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portais  $portais
     * @return \Illuminate\Http\Response
     */
    public function show(Portais $id)
    {
        $modelPortais = new Portais();
        $findPortais = $modelPortais->find($id);
        return view('Canais.editeCanais',compact('findPortais'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portais  $portais
     * @return \Illuminate\Http\Response
     */
    public function edit(Portais $portais)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portais  $portais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portais $portais)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portais  $portais
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portais $id)
    {
        $destroyPortais = Portais::findOrFail($id)->delete();

        return $destroyPortais;
    }
}
