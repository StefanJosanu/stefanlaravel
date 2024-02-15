@extends('layouts.app')
@section('title')
    Contacts
@endsection
@section('content')
    <style>
        .content {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .flip-card {
            background-color: transparent;
            width: 500px;
            height: 500px;
        }

        .flip-card-inner {
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
        }


        .flip-card-front {
            background-image: url("https://about.me/s3/h/z/social.2ec36ec3.png");
            background-position: center;
            background-repeat: no-repeat;
            color: black;
        }

        .flip-card-back {
            background-color: #2a2a2a;
            background-position: center;
            background-repeat: no-repeat;
            color: white;
            transform: rotateY(180deg);
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        img {
            width: 100px;
            height: 100px;
        }
    </style>
    <div class="content">
        <h1>{{ $np }}</h1>
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                </div>
                <div class="flip-card-back">
                    <div class="c">
                        <h1>Stefan Josanu</h1>
                        <p>W-2042c</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
