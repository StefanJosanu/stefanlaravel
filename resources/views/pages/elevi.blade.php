@extends('layouts.app')
@section('content')
@section('title')
    Elevi
@endsection
<style>
    .jumbotron {
        width: 100vw;
        height: 40vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #e9ecef;
        margin-bottom: 3.5vh;
    }
</style>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Tabelul elevi</h1>
        <p>Aceasta pagina foloseste modelul Jumbotron din Bootstrap 4</p>
        <p><a class="btn btn-primary btn-lg" href="https://getbootstrap.com/" role="button">Afla mai multe despre Bootstrap</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($elevi as $elev)
            <div class="col-md-4">
                <h2>Nume: {{$elev->nume}}</h2>
                <h2>Prenume: {{$elev->prenume}}</h2>
                <p>Email: {{$elev->email}}</p>
                <p>Nota: {{$elev->nota}}</p>
                <p><a class="btn btn-secondary" href="#" role="button">Detalii &raquo;</a></p>
            </div>
        @endforeach
    </div>
    <hr>
<footer class="container">
    <p>&copy; Josanu Ștefan 2024-2025</p>
  </footer>
</div>
@endsection
