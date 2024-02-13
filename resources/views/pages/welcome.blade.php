@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
        }

        .banner {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2a2a2a;
        }

        .info {
            width: 50%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .info h1 {
            color: #fff;
            font-size: 3em;
            /*  */
        }

        .info h1 span {
            /* animation: swapColors 5s infinite; */
        }

        .bmw {
            color: #81C4FF;
        }

        .motor {
            color: #16588E;
        }

        .sport {
            color: #E7222E;
        }

        .info_p {
            color: #fff;
            font-size: 1.5em;
        }

        .content_p {
            color: #fff;
            size: .3em;
        }

        .content {
            width: 9%;
            height: 15%;
            display: flex;
            position: absolute;
            bottom: .5vh;
            right: 12vw;
        }

        .content img {
            width: 14%;
            margin-left: 5%;
            height: 15%;
        }

        .image {
            width: 50%;
            height: 100%;
            background-image: url("https://www.popsci.com/uploads/2023/10/05/capybara-riverbank.png?auto=webp");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            filter: blur(3px);
            filter: grayscale(40%);
            transition: filter 1.5s ease;
        }

        .image:hover {
            filter: blur(0) grayscale(0);
        }

        .image::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        .banner .info {
            background-image: linear-gradient(135deg, rgba(0, 32, 63, 0.7), rgba(0, 7, 26, 0.7), rgba(0, 0, 0, 0.7));
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            transition: background-image 0.3s ease-in-out, border-radius 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .banner:hover .info {
            background-image: linear-gradient(135deg, rgba(0, 32, 63, 0.9), rgba(0, 7, 26, 0.9), rgba(0, 0, 0, 0.9));
            transition: background-image 0.3s ease-in-out, border-radius 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .info h1:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        .content {
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .banner:hover .content {
            opacity: 1;
        }

        @keyframes swapColors {

            0%,
            100% {
                color: #81C4FF;
            }

            25% {
                color: #16588E;
            }

            50% {
                color: #E7222E;
            }

            75% {
                color: #16588E;
            }
        }


        @keyframes rotateLogo {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .content img {
            animation: rotateLogo 10s linear infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.02);
            }

            100% {
                transform: scale(1);
            }
        }

        .info_p {
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .banner {
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes scaleIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .content {
            animation: scaleIn 1s ease-in-out;
        }

        @keyframes colorChangeB {
            0% {
                color: #81C4FF;
            }

            50% {
                color: #16588E;
            }

            100% {
                color: #81C4FF;
            }
        }

        .bmw {
            animation: colorChangeB 5s infinite;
        }

        @keyframes colorChangeM {
            0% {
                color: #E7222E;
            }

            50% {
                color: #81C4FF;
            }

            100% {
                color: #16588E;
            }
        }

        .motor {
            animation: colorChangeM 5s infinite;
        }

        @keyframes colorChangeS {
            0% {
                color: #81C4FF;
            }

            50% {
                color: #E7222E;
            }

            100% {
                color: #16588E;
            }
        }

        .sport {
            animation: colorChangeS 5s infinite;
        }
    </style>
        <div class="banner">
            <div class="image">
            </div>
            <div class="info">
                <h1><span class="bmw">Stefan </span><span class="motor">Josanu </span><span class="sport">Entertaiment</span></h1>
                <p class="info_p">Full Windows .NET Core Enjoyer</p>
            </div>
            <div class="content">
                <p class="content_p">Powered By </p>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEVRK9T///9EEtLMxvBKINOTf+NDDtJHF9LTy/Pj3/dOJtP+/f9pTdlIG9KrnOmejeU/AdHu6vvEufBMI9NbONbx7vymlufZ0vV6YN328/1YNNaHceBoStnLwvGZhuR1Wtzg2veBad+rn+iYh+O3reuLd+G6re3IvfFgQdePe+K/tO739v1wVNu0p+vi3PeEbeD5xLvjAAADrElEQVR4nO3af1+iMACA8UHIuBmGkplZmpVl9uPe/7s7LdmGIPCpLNo9378uQ9mTnoyBEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP+T2NeCis3SbKPYflT6VWTuibXi8j1/OvDmKBPd7t9HOom2W91Yf4f47qjK4GL9xEVUuY3lpeov/HHhyNO6p2rfZsFJtlEkrSf/8aqM168Xn1VuYhvJfXv/XGFk7SNKvrRw2L5Cb7Hvg+JM4dD5Qm8Vul7onZe/iw4Vvn5h4dt3aa9thV6vdD91hf3VoOh+czycPOQfvDJF+V889NLvKexelh0U6wqjRJbYbJPmHwqX3ew5i53nHGhOUyjMJTQvbPoJU8e6sHOYOcyuYqH3WLJnJwr1aMeuFk71rksOik4UTsy33KzwreZE4fRU77vv727mROFJcqPfxN5uohuFsd/P/l04KDpReBanM/0mjnbeREcKRbjSiZ38DMOJwl4slBpnP40vcp9TVwpFsNBv4iD3OXWmUEhzUJzbA3CnUC2fsp/7bhYKqVO8G2vU9WdPxRXe0qXJny8U8bVOXJox1hU+9QuGi7Iz2hYUps+68Nosn35kFaO0oAWFwn8xY9QHRacKRTjUnz2RfU7dKrQmb1fZmaJbhSJ50KOcbEfhWKESevLW335OHSsUcUcP8+U96COF0xYXCmlW4J7fjmp1ha+Lzq5p6cJrWwrVpR7H+1p7/ZwmKGjrnOadNBdUppvHHZqXZqSevHU3XzYOFtoHxcTJQhHe68T1maKLhSLQk7dhLIJbFwvn+k28D4Opg4UisZb5pZOFSunBXCcdFwvtydvt3MlC4etbwsZ/u04WWpO3qycnC4Us3ivS+kKVprkZcXWhSAvnRy0vVOHFfL4MrWW+msLg/HcVphdX69fvXs9MTE2h8FfNCkvOntaKr3fYQrXMVicmuqauUKVDL6fxGfDG8psLpflPpe8GrisUwaRJ4R7nhWXvgxYGj2bXg2yctYUiOfo1hdKcD3n9bMG+vlCJrj3oVhcOzK7HzQtFfGsPus2F9q2eo2wxu0GhkNb9/K0uVOaqklnLbFKYHv+SQiH1VSVz3axJoZDmXqLPF+pfHuKIH25HGpnXloPsguZJxQ7VSF/4HOQWjosXRm3jWWHNVF3qX5ZeQf0sf3kXRau5fe+hTLYq/6JhtlWSm575SbWSRWGlX+owNz0rGYbyMC8NAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMCP+AcjY1W1AP97SAAAAABJRU5ErkJggg=="
                    alt="">
            </div>
        </div>
@endsection
