@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset--3">
            <div class="panel panel-default">
            <div class="panel-heading"><strong>Lista de Atividades</strong></div>
                <div class="panel-body">
                <table class="table">
                <tbody>
                    <tr>
                    <th>Núcleo</th>
                    <th>Estrutura</th>
                    <th>Atividades</th>
                    <th>Localização</th>
                    <th>Status</th>
                    <th>Ações</th>
                    </tr>
                    @foreach ($esportes as $esporte)
                    <tr>
                    <td>{{$esporte->nome}}</td>
                    <td>{{$esporte->estrutura}}</td>
                    <td>{{$esporte->atividades}}</td>
                    <td style="text-align: center;"><a target="_blank" href="{{ url($esporte->endereco) }}"><i class="fa-solid fa-location-dot fa-2xl"></i></a></td>
                    <td>Não Matriculado</td>
                    <td><a href=""class="btn btn-success mx-1">Matricular</a></td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
