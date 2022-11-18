<?php

namespace App\Http\Controllers;
use App\Esporte;
use Illuminate\Http\Request;

class EsporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listar()
    {
        $esportes = Esporte::all();

        //dd($esportes);
        return view('esportes/listaresportes', compact('esportes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrar()
    {
        return view('esportes/cadesportes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function novoCadastro(Request $request)
    {

        $regras = [
            'nome' => 'required|string|min:5|max:40',
            'estrutura' => 'required|string|min:10|max:255',
            'atividades' => 'required|string|min:10|max:255',
            'endereco' => 'required|string|min:10',
        ];
        $mensagens = [
            'nome.min' => 'Nome precisa ter no minimo 10 caracteres',
            'name.max' => 'Numero maximo de caracteres ultrapassado',
            'estrutura.min' => 'Descrição precisa ter no minimo 10 caracteres',
            'estrutura.max' => 'Numero maximo de caracteres ultrapassado',
            'atividades.min' => 'Descrição precisa ter no minimo 10 caracteres',
            'atividades.max' => 'Numero maximo de caracteres ultrapassado',
            'endereco.min' => 'Endereço precisa ter no minimo 10 caracteres'
        ];
        $validator = validator($request->all(), $regras, $mensagens);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        else{

        $esporte = $request->all();

        Esporte::create($esporte);
        
        return back()->with(['success' => 'Esporte cadastrado com sucesso']);
        }
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
    }
}