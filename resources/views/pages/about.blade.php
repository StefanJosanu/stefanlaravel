@extends('layouts.app')
@section('content')
@section('title')
    About
@endsection
<style>
    .content {
        width: 100vw;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
</style>
<div class="content">
        <img class="col-4 rounded mt-3" src="https://media.wired.com/photos/5b9ffc835031ce6b87548307/16:9/w_1760,h_990,c_limit/Linus-Linux-495992840.jpg" alt="">
        <ul class="list-group list-group-horizontal">
            @foreach ($groups as $group)
                <li class="list-group-item mt-3">{{ $group }}</li>
            @endforeach
        </ul>
</div>
@endsection
