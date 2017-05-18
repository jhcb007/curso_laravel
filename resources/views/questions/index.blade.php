@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session('message'))
            <div class="alert alert-success">
                {{session("message")}}
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                Perguntas
                <a href="{{url("question/create")}}" class="btn btn-xs btn-primary pull-right">
                    Adicionar Pergunta
                </a>
            </div>
            <div class="panel-body">
                <ul>
                @forelse($questions as $q)
                   <li>{{$q->title}} ({{$q->user->name}})</li>
                        <li>{{$q->content}}</li>
                @empty
                    Nenhum resultado encontrado
                @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection