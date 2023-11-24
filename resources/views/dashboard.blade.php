{{-- @dd($checklist[0]->category->name) --}}

@extends('layouts.app')

@section('title', 'Checklist')

@section('newList')

    @if (!isset($checklist))
        <img src="/img/search.png" alt="search" class="img-search">
    @endif

    @include('components.modal-create-checklist')

@endsection


@section('dashboard')

    @if (!isset($checklist) || count($checklist) == 0)
        <div class="mx-auto h-100 d-flex flex-column justify-content-center text-center gap-1">
            <a
                href="https://br.freepik.com/vetores-gratis/ilustracao-do-conceito-de-lista-de-verificacao-de-objetivos-pessoais_28766054.htm#query=tasks%20and%20checklist&position=20&from_view=search&track=ais">
                <img src="./img/svg-checklist-for-dashboard.svg"
                    alt="checklist for task list for the smooth running of appointments" class="img-dashboard-empty">
            </a>
            <span> No to-do list so far </span>
        </div>
        @else
        
            @foreach ($checklist as $key => $c)
                {{-- @if ($c->listDate) --}}
                <div class="checklist-card">
                    <a href="{{ route('task.view', ['id' => $c->id]) }}" class="text-white d-block w-100">
                        <span class="d-inline listDate" style="font-size: 8pt; color: rgb(var(--quat-c));">
                            <span>{{ date('d-m-Y', strtotime($c->listDate)) }}</span>
                        </span>
                        <h5>
                            {{ $c->name }}
                            <span class="checklist-date">({{ date('d/m/Y', strtotime($c->listDate)) }})</span>
                        </h5>
                        <div class="d-flex align-items-center listDate gap-1 text-cappitalize"
                            style="font-size: 8pt; color: rgb(var(--tert-c)) !important;">
                            <img src="{{ $c->category->icon }}" alt="{{ $c->category->name }}" height="16pt">
                            <span>{{ $c->category->name }}</span>
                        </div>
                    </a>
                    <div class="actions">
                        
                        @include('components.modal-edit-checklist')

                        @include('components.form-delete-checklist')
                        
                    </div>
                </div>
            @endforeach
        
    @endif

@endsection

