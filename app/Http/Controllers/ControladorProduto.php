<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

use App\Models\Categoria;

class ControladorProduto extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pros = Produto::all();
        return view('produtos',  compact('pros'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categoria::all();
        return view('novoproduto', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pro = new Produto();
        $pro->nome = $request->input('nome');
        $pro->estoque = $request->input('estoque');
        $pro->preco = $request->input('preco');
        $pro->categoria_nome = $request->input('categoria');
        $pro->save();
        return redirect('/produtos');
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

        $pro = Produto::Find($id);
        $cats = Categoria::all();
        if (isset($pro)){
            return view ('editarproduto', compact('pro'), compact('cats'));
        } 

        return redirect('/categorias');
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
        $pro = Produto::Find($id);
        if (isset($pro)){
            $pro->nome = $request->input('nome');
            $pro->estoque = $request->input('estoque');
            $pro->preco = $request->input('preco');
            $pro->categoria_nome = $request->input('categoria');
            $pro->save();
        } 

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = Produto::find($id);
        if (isset($pro)) {
            $pro->delete();
        }
        return redirect('/produtos');
    
    }
}
