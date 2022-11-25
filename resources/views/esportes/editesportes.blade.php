@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Formulario de Cadastro</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('/editar_esportes', $esporte->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                            <input type="hidden" name="_method" value="PUT">
                            <label for="nome" class="col-md-4 control-label">Núcleo do Esporte</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control" name="nome"required autofocus placeholder="{{$esporte->nome}}">

                                @if ($errors->has('nome'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('estrutura') ? ' has-error' : '' }}">
                            <label for="estrutura" class="col-md-4 control-label">Estrutura</label>

                            <div class="col-md-6">
                                <textarea id="estrutura" type="estrutura" rows="3" cols="50" class="form-control" name="estrutura" required placeholder="{{$esporte->estrutura}}"></textarea>

                                @if ($errors->has('estrutura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('estrutura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('atividades') ? ' has-error' : '' }}">
                            <label for="atividades" class="col-md-4 control-label">Atividades</label>

                            <div class="col-md-6">
                                <textarea id="atividades" type="atividades" rows="3" cols="50" class="form-control" name="atividades" required placeholder="{{$esporte->atividades}}"></textarea>

                                @if ($errors->has('atividades'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('atividades') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                            <label for="endereco" class="col-md-4 control-label">Endereço(Google Maps)</label>

                            <div class="col-md-6">
                                <input id="endereco" type="endereco" class="form-control" name="endereco" required placeholder="{{$esporte->endereco}}">

                                @if ($errors->has('endereco'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Atualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
