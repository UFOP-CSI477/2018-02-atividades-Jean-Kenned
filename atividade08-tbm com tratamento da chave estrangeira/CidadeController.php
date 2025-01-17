<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;
use App\Estado;
use Illuminate\Support\Facades\Auth;

class CidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      if(Auth::check()){
        $cidades = Cidade::all();
        return view('cidades.index')->with('cidades',$cidades);
      }else{
        return redirect()->route('login');
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::orderBy('nome')->get();
        return view ('cidades.create')->with('estados',$estados);
        //ou return view ('cidades.create',['estados'=>$estados]);
      }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Cidade::create($request->all());
        return redirect()->route('cidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cidade $cidade)
    {
        return view('cidades.show')->with('cidade',$cidade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cidade $cidade)
    {
        $estados = Estado::orderBy('nome')->get();
        return view('cidades.edit')->with('cidade',$cidade)->with('estados',$estados);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cidade $cidade)
    {
        $cidade->fill($request->all());
        $cidade->save();

        session()->flash('mensagem','Cidade atualizada com sucesso');

        return redirect()->route('cidades.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cidade $cidade)
    {
      //faz aqui validacao de chave estrangeira por exemplo

      //Excluir
      $cidade -> delete();
      session()->flash('mensagem',"Cidade excluída com sucesso");
      return redirect()->route('cidades.index');
    }
}
