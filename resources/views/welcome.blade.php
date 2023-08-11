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
        width: 320px;
        height: auto;
    }

    .msg_welcome{
        width: 100dvw;
        height: 100dvh;
        position: absolute;
        padding-top: 1em;
    }
    .msg_welcome h1 {
        margin-top: 10px;
        text-align: center;
        font-size: 30pt;
        color: rgb(var(--quin-c));
        font-weight: 650;
    }
</style>

@extends('layouts.app')

@section('welcome')
    <div class="msg_welcome">
        <h1> Organize o seu dia! <br> Use um checklist </h1>
    </div>

    <img src="/img/org_checklist.jpg" alt="">
@endsection
