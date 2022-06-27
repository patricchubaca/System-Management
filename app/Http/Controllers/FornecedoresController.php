<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFornecedoresRequest;
use App\Http\Requests\UpdateFornecedoresRequest;
use App\Models\Fornecedores;

class FornecedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreFornecedoresRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFornecedoresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFornecedoresRequest  $request
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFornecedoresRequest $request, Fornecedores $fornecedores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fornecedores  $fornecedores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fornecedores $fornecedores)
    {
        //
    }
}
