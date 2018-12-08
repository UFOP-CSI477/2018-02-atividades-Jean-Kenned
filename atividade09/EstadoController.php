<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{

    public function __construct(){
      //  $this->middleware('auth')->except('index');
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estados = Estado::all();
        return view('estados.index') -> with('estados', $estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->all());
      //Fazer Validação aqui

      // Gravar
      //inserção em massa
      Estado::create($request->all());
      return redirect('/estados');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        //se fosse $id o parametro
        //$estado = Estado::find($id);

        return view('estados.show')->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        //request tem os dados com valores a serem atualizados e estado mantem os valores que esta no meu BD
        // dd($estado);
        // dd($request->all());

      //  $estado->nome = $request->nome; fazer isso para todos os atributos ou...
      $estado->fill($request->all());
      $estado->save();

      session()->flash('mensagem','Estado atualizado com sucesso!');

      return redirect()->route('estados.show',$estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //faz aqui validacao de chave estrangeira por exemplo

        //Excluir
        $estado -> delete();
        session()->flash('mensagem',"Estado excluído com sucesso");
        return redirect()->route('estados.index');
    }
}
