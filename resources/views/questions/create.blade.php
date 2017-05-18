@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                Adicionar Perguntas
            </div>
            <div class="panel-body">
                <form method="post" action="{{url('question')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Titulo</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Pergunta</label>
                        <textarea type="text" name="content" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
@endsection