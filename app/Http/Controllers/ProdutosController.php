<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Produto;
use Illuminate\Support\Facades\Validator;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produtos     = Produto::get();
        return view('index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register');
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
        //$validateData = $request->validate(Produto::$rules);

        $validateData = Validator::make( $request->all(), [
            'nome_produto' => 'required|between:3,250',
            'descricao' => 'required|between:3,350',
            'preco' => 'required|numeric',
            'quantidade' => 'required|integer',
        ]);

        //dd($validateData->errors());

        if($validateData->fails() == true){
            return redirect()->back()->withInput($request->all())->withErrors(['msg' => 'Favor verificar as mensagens de erro']);
        }

        $produto = new Produto($request->all());

        $produto->nome_produto      = $request->get('nome_produto');
        $produto->descricao         = $request->get('descricao');
        $produto->preco             = str_replace(',', '.', $request->get('preco'));
        $produto->quantidade        = str_replace(',', '.', $request->get('quantidade'));
        $produto->save();
        session()->flash('success', __('O produto :Title foi adicionado', ['Title' => $produto->nome_produto ]));

        return redirect()->action('ProdutosController@index');

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
        $produto    = Produto::where('id', $id)->first();

        return view('edit',compact('produto'));
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

        $validateData = Validator::make( $request->all(), [
            'nome_produto' => 'required|between:3,250',
            'descricao' => 'between:3,350',
            'preco' => 'numeric',
            'quantidade' => 'integer',
        ]);

        if($validateData->fails() == true){
            return redirect()->back()->withInput($request->all())->withErrors(['msg' => 'Favor verificar as mensagens de erro']);
        }

        $produto    = Produto::where('id', $id)->first();

        $produto->nome_produto      = $request->get('nome_produto');
        $produto->descricao         = $request->get('descricao');
        $produto->preco             = str_replace(',', '.', $request->get('preco'));
        $produto->quantidade        = str_replace(',', '.', $request->get('quantidade'));

        $produto->save();
        session()->flash('success', __('O produto :Title foi atualizado', ['Title' => $produto->nome_produto ]));

        return redirect()->action('ProdutosController@index');
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
        $produto    = Produto::where('id', $id)->first();

        if(!empty($produto)){
            $produto->delete();
        }
        return redirect()->action('ProdutosController@index');
    }
}
