@extends('layouts.app')

@section('title')
    Elevi
@endsection

@section('content')
    <style>
        .content {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items:center;
            flex-direction: column;
        }
    </style>

    <div class="content">
        <h1>Elevi</h1>
        <ul class="list-group ">
            @foreach ($elevi as $elev)
                <li class="list-group-item mt-3 list-group-item-dark">Id: {{ $elev->id }}</li>
                <li class="list-group-item mt-3 list-group-item-dark">Nume: {{ $elev->nume }}</li>
                <li class="list-group-item mt-3 list-group-item-dark">Prenume: {{ $elev->prenume }}</li>
                <li class="list-group-item mt-3 list-group-item-dark">Nota: {{ $elev->nota }}</li>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
