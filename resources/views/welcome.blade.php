@extends('layouts.app')

<style>
    body {
        overflow-x: hidden !important;
    }

    .sec-welcome {
        /* background-color: #fefefe; */
        /* color: black; */

    }

    /* .sec-welcome img {
        translate: 0 -25px;
        z-index: -99;
        width: 100vw;
        margin: auto;
        height: auto;
    } */

    .msg_welcome {
        position: absolute;
        margin: 15px 10em;
    }

    .msg_welcome h1,
    .msg_welcome .fraseMotivacional {
        text-align: center;
        color: rgb(var(--quin-c));
        text-shadow: 0 0 2px rgb(var(--quat-c)), 0 0 4px rgb(var(--tert-c)), 0 0 6px rgb(var(--quin-c));
    }

    .msg_welcome h1 {
        font-size: 25pt;
        font-weight: 650;
    }

    .msg_welcome .fraseMotivacional {
        font-size: 13pt;
        font-weight: 450;
    }
</style>

@section('welcome')
    <div class="efeitoImg">

        <div class="msg_welcome d-grid gap-2">
            <h1 class="title"> Organize o seu dia! </h1>
            <div class="fraseMotivacional">
                " Com organização e tempo, acha-se o segredo de fazer tudo e bem feito. " - Pitágoras
            </div>
        </div>

    </div>


    <style>
        .cardSection {
            position: relative;
            margin: 10rem 5rem;
        }

        .cardSection>.section {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-around;
            gap: 25px 15px;
        }

        .titleCard {
            margin: 1.5em 0;
            text-align: center;
            color: rgb(var(--quat-c));
        }

        .card {
            width: 225px;
            height: 225px;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            background-color: rgb(var(--quin-c));
            border: none;
        }

        .imgCard {
            width: 100%;
            height: 100%;
            background-position: center right;
            background-size: cover;
        }

        .textCard {
            padding: .25em 0;
            color: rgb(var(--sec-c));
            font-weight: 600;
            border-radius: 5px;
        }
    </style>

    <div class="cardSection">
        <h2 class="titleCard">
            Vantagens de usar um checklist
        </h2>
        <hr>
        <br>
        <div class="section">
            <div class="card">
                <div class="imgCard" style="background-image: url('/img/checklist-with-checked.jpg');"></div>
                <span class="textCard">
                    Controle </span>
            </div>

            <div class="card">
                <div class="imgCard" style="background-image: url('/img/notebook-on-the-desk.jpg');"></div>
                <span class="textCard">
                    Organização </span>
            </div>

            <div class="card">
                <div class="imgCard" style="background-image: url('/img/mulher-usando-em-notebook-tranquilamente.jpg');">
                </div>
                <span class="textCard">
                    Tranquilidade </span>
            </div>

            <div class="card">
                <div class="imgCard" style="background-image: url('/img/relogio-sobre-mesa-com-papeis.jpg');"></div>
                <span class="textCard">
                    Agilidade </span>
            </div>

            <div class="card">
                <div class="imgCard" style="background-image: url('/img/mulher-sorrindo-e-satisfeita.jpg');"></div>
                <span class="textCard">
                    Satisfação </span>
            </div>

            <div class="card">
                <div class="imgCard" style="background-image: url('/img/pano-sendo-observado-com-uma-lupa.jpg');"></div>
                <span class="textCard">
                    Qualidade </span>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column  justify-content-center align-items-center mb-5">
        <h2 class="text-center">Venha organizar o seu dia! </h2>
        <a href="{{ url('login') }}" class="btnG btnG-light-green" style="padding: 10px 20px;"> Clique para
            começar </a>
    </div>

@endsection
