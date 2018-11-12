<?php

namespace App\Http\Controllers;

use App\Sabor;
use Illuminate\Http\Request;

class saboresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaSabores = Sabor::all();
        return view('sabores.list',['sabores' => $listaSabores]);
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
     * @param  \App\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function show(Sabor $sabor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function edit(Sabor $sabor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sabor $sabor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sabor  $sabor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sabor $sabor)
    {
        //
    }
}
