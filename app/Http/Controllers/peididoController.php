<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\Sabor;
use Illuminate\Http\Request;

class peididoController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::all();
        $sabores = Sabor::all();
        return view ('pedido.create',['tipos' => $tipos, 'sabores' => $sabores]);
    }

    public function store(Request $request){

    }

    public function index(){
    	
    }
}
