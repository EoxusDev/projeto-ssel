@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading2"><strong>Programa Esporte e Lazer Para Todos Inscrições Abertas</strong></div>

                <img src="{{ asset('img/esportes.jpg') }}" alt="Esportes" style="height:480px;" class="esportes">
                <div class="panel-heading2"><a class="link" href="{{ route('listaresportes') }}"><strong>Matricule-se Já</strong></div>
            </div>
        </div>
    </div>
</div>
@endsection
