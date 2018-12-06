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

        //faço as validações dos campos
        //vetor com as mensagens de erro
        $peididos = array(
            'titulo.required' => 'É obrigatório um título para este pedido',
            'descricao.required' => 'É obrigatória uma descrição para este pedido',
        );
        //vetor com as especificações de validações
        $regras = array(
            'titulo' => 'required|string|max:255',
            'descricao' => 'required',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $peididos);
        //executa as validações
        if ($validador->fails()) {
            return redirect('peididos/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_peididos = new Pedido();
        $obj_peididos->titulo =       $request['titulo'];
        $obj_peididos->descricao = $request['descricao'];
        $obj_peididos->user_id = Auth::id();
        $obj_peididos->sabores_id = $request['sabores_id'];
        $obj_peididos->save();
        return redirect('/peididos')->with('success', 'Pedido criado com sucesso!!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Mensagem  $mensagem
     * @return \Illuminate\Http\Response
     */







    }

    public function index(){
    

 $peididos = Pedido::paginate(3);
        return view('peididos.list',['peididos' => $peididos]);




    }
}
