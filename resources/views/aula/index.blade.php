@extends('layouts.app')
@section('title', 'Aulas')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Matéria</th>
            <th>Dia</th>
            <th>Horário</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($materias as $materia)
        <tr>
            <td>{{$materia->id}}</td>
            <td>{{$materia->descricao}}</td>
            <td>{{$materia->dia}}</td>
            <td>{{$materia->hora}}</td>
            <td>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a class="btn btn-primary btn-sm" href="aulas/{{$materia->id}}/editar">
                        Editar
                    </a>
                    <form action="/aulas/{{$materia->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger btn-sm">Remover</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="aulas/nova" class="btn btn-primary">Nova</a>
@endsection
