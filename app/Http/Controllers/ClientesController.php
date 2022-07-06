<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ClientController extends Controller
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
            $registro['cliente'] = $value['cliente'];
            $registro['uasg'] = $value['uasg'];
            $registro['cnpj'] = $value['cnpj'];

           $registro['button'] = '<button class="button is-info is-light" onclick="createClient('.$value['id'].')">
             <i class="fa-solid fa-folder-closed"></i> </button>

            <button class="button is-danger is-light" onclick="deletarCliente('.$value['id'].')"><i class="fa-solid fa-trash-can"></i></button>';
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
          
         $createCliente = Client::create($diceClient);

         return view('Clients.todosClient');

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
