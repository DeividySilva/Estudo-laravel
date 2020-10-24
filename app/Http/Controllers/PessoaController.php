<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $pessoas = \App\Pessoa::all();
          $pessoas = \App\Pessoa::paginate(10);

        return view ('pessoas.index', compact('pessoas'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pessoas.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /* $pessoa = new \App\Pessoa();

       $pessoa->nome = $request->nome;
       $pessoa->telefone = $request->telefone;
       $pessoa->email = $request->email;

       $pessoa->save();
       */

       $request->validate([
        'nome' => 'required',
        'telefone' => 'required'
       ]);

       Pessoa::create($request->all());
       return redirect('/pessoas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {

        return view( 'pessoas.show', compact ('pessoa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pessoa $pessoa)
    {

        return view('pessoas.form', compact ('pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Pessoa $pessoa)
    {
       // $pessoa = \App\Pessoa::find($id);
        /*
        $pessoa->nome = $request->nome;
        $pessoa->telefone = $request->telefone;
        $pessoa->email = $request->email;
 
        $pessoa->save();
        */
        $pessoa->update($request->all());

        return redirect('/pessoas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pessoa $pessoa)
    {

        $pessoa->delete();

        return redirect('/pessoas');
    }
}
