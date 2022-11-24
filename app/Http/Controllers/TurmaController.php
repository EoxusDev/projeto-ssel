<?php

namespace App\Http\Controllers;

use App\User;
use App\Esporte;
use App\Turma;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function matricular(Request $request)
    {   
        $esporte = $request->all();

        $regras = [
            'users' => Rule::unique('turmas')->where(function ($regra) use($esporte){
                $regra->where('esportes', $esporte['esportes']);
            })
        ];
        $mensagens = [
            'users.unique' => 'Usuario ja matriculado no esporte'
        ];
        
        $validator = validator($request->all(), $regras, $mensagens);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }
        else{
            $turma = $request->all();
            Turma::create($turma);

            return back()->with(['success' => 'Usuario Matriculado com sucesso']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
    }
}
