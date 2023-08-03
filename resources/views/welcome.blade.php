<style>
    body {
        overflow: hidden !important;
    }

    .sec-welcome {
        width: 100dvw;
        height: 100dvh;
        background-color: #fefefe;
        color: black;
        z-index: -1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sec-welcome img {
        width: 450px;
        height: auto;
    }

    .msg_welcome{
        width: 100dvw;
        height: 100dvh;
        position: absolute;
        padding-top: 1em;
    }
    .msg_welcome h1 {
        text-align: center;
        font-size: 40pt;
        color: rgb(var(--quin-c));
    }
</style>

@extends('layouts.app')

@section('welcome')
    <div class="msg_welcome">
        <h1> Bem vindo! </h1>
    </div>

    <img src="/img/org_checklist.jpg" alt="">
@endsection
