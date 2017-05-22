<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Artesaos\Defender\Facades\Defender;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function pessoasjson()
    {
        $pessoas = Pessoa::all();
        return $pessoas->toJson();

    }

    public function index()
    {


        if (Defender::hasPermission('exemplo.index')) {

            $pessoas = Pessoa::orderBy('id', 'asc')->paginate(10);


            return view('pessoa.index', compact('pessoas'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pessoa.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pessoa = new Pessoa();

        $pessoa->nome = $request->input('nome');
        $pessoa->sexo = $request->input('sexo');
        $pessoa->cpf = $request->input('cpf');


        $pessoa->save();


        return redirect()->route('pessoa.index')->with('message', 'Item created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
