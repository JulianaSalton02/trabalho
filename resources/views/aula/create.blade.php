@extends('layouts.app')
@section('title', 'Nova Aula')
@section('content')

    <form method="POST" action="/aulas">
        @csrf
        <div class="mb-3">
            <label for="materia" class="form-label">Matéria</label>

            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="mb-3">
            <label for="dia" class="form-label">Dia</label>
            <select class="form-control" name="dia" id="dia">
            @foreach($dias as $dia)
                <option value="{{$dia->id}}">{{$dia->descricao}}</option>
            @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="horario" class="form-label">Horário</label>
            <select class="form-control" name="horario" id="horario">
            @foreach($horas as $hora)
                <option value="{{$hora->id}}">{{$hora->hora}}</option>
            @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/aulas" class="btn btn-secondary">Cancelar</a>
    </form>

@endsection
