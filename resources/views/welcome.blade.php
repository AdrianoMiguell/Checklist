@extends('layouts.guest')

@include('layouts.navigation')

@section('welcome')
    <div class="efeitoImg">

        <div class="msg_welcome d-grid gap-2">
            <h1 class="title"> Organize o seu dia! </h1>
            <div class="fraseMotivacional">
                " Com organização e tempo, acha-se o segredo de fazer tudo e bem feito. " - Pitágoras
            </div>
        </div>

    </div>

    <div class="cardSection">
        <h2 class="titleCard my-5">
            Vantagens de usar um checklist
        </h2>
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

    <div class="inviteClick d-flex flex-column  justify-content-center align-items-center">
        <h2 class="text-center">Venha organizar o seu dia! </h2>
        <a href="{{ url('dashboard') }}" class="btnG btnG-light-green" style="padding: 10px 20px;"> Clique para
            começar </a>
    </div>

@endsection
