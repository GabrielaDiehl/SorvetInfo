<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;

class tiposController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaTipos = Tipo::all();
        return view('tipos.list',['tipos' => $listaTipos]);
    }
}
