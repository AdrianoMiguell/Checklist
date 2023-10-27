@extends('layouts.guest')

@include('layouts.navigation')

@section('welcome')
    <style>

        .sectionInit {
            padding: 1rem 2rem;
            display: flex;
            flex-grow: 1;
            gap: 2rem;
            flex-direction: column;
            justify-content: space-around;
        }

        .divMessage {
            min-height: 250px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: .5rem;
        }

        .messageImg,
        .messageText {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
            gap: 1rem;
            height: 100%;
        }

        .messageImg {
            padding: 0 1rem;
        }

        .messageImg img {
            width: 300px;
            height: auto;
        }

        .messageText {
            width: 300px;
            padding: 0 2rem;
            color: rgb(var(--light-c));
            text-shadow: .5px .5px .5px rgba(var(--sec-c), .75);
            flex-direction: column;
            text-align: center;
        }

        .messageText h1 {
            font-size: 20pt;
            font-weight: 650;
        }

        .messageText .fraseMotivacional {
            font-size: 12pt;
            font-weight: 450;
        }
    </style>

    <div class="sectionInit">

        <div class="divMessage">

            <div class="messageImg" class="changeImages">
                <a href="https://br.freepik.com/vetores-gratis/pessoas-ilustradas-desenhadas-a-mao-que-planejam-negocios_19948931.htm#query=organiza%C3%A7%C3%A3o&position=10&from_view=search&track=sph"
                    class="referenceImg" target="_blank" ><img src="/img/organizando_o_tempo_com_checklist.svg"
                        alt="imagem sobre organização, retirada do Freepik" /></a>
            </div>
            <div class="messageText">
                <h1 class="title"> Organize o seu dia! </h1>
                <div class="fraseMotivacional">
                    " Com organização e tempo, acha-se o segredo de fazer tudo e bem feito. " - Pitágoras
                </div>
            </div>

        </div>

        <div class="inviteClick d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center">Venha organizar o seu dia! </h2>
            <a href="{{ url('dashboard') }}" class="btnG btnG-light-green" style="padding: 10px 20px;"> Clique para
                começar </a>
        </div>

    </div>
@endsection
