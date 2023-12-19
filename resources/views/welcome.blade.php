@extends('layouts.guest')

@include('layouts.navigation')

@section('welcome')
    <section class="container">

        <div class="divMessage">

            <div class="messageImg" class="changeImages">
                <a href="https://br.freepik.com/vetores-gratis/pessoas-ilustradas-desenhadas-a-mao-que-planejam-negocios_19948931.htm#query=organiza%C3%A7%C3%A3o&position=10&from_view=search&track=sph"
                    class="referenceImg" target="_blank"><img src="/img/organizando_o_tempo_com_checklist.svg"
                        alt="imagem sobre organização, retirada do Freepik" /></a>
            </div>
            <div class="messageText">
                <h1 class="title"> Organize o seu dia! </h1>
                <div class="fraseMotivacional">
                    " Com organização e tempo, acha-se o segredo de fazer tudo e bem feito. " - Pitágoras
                </div>
                <div class="inviteClick">
                    <h2 class="text-center fs-3">Venha organizar o seu dia! </h2>
                    <a href="{{ url('dashboard') }}" class="btnG btnG-light-green" style="padding: 10px 20px;"> Clique para
                        começar </a>
                </div>
            </div>

        </div>


    </section>
@endsection
