{{-- @dd($checklist) --}}

@extends('layouts.app')

@section('title', 'Checklist')

@section('newList')

    @if (!isset($checklist))
        <img src="/img/search.png" alt="search" class="img-search">
    @endif

    {{-- <section class="d-flex justify-content-center m-2">
    </section> --}}

    <!-- Button trigger modal -->
    <button type="button" class="btnG btnG-green p-0" data-bs-toggle="modal" data-bs-target="#newList" id="modalList">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus"
            viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
        </svg>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="newList" tabindex="-1" aria-labelledby="newListLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <form action="{{ Route('checklist.create') }}"
                        class="newChecklist d-flex flex-column justify-content-around align-items-start p-2 px-4 w-100 gap-2"
                        method="POST">
                        @csrf
                        <legend class="text-center"> To-do List </legend>
                        <div>
                            <label for="name" class="form-label"> name </label>
                            <textarea name="name" id="name" cols="58" rows="1" class="form-control" maxlength="80"></textarea>
                        </div>
                        <div class="my-1">
                            <label for="date" class="form-label"> list date </label>
                            <input type="date" name="listDate" id="date" class="form-control">
                        </div>

                        <div class="w-100 d-flex justify-content-end my-2">
                            <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z" />
                                    <path
                                        d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM8.5 6.5V8H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V9H6a.5.5 0 0 1 0-1h1.5V6.5a.5.5 0 0 1 1 0Z" />
                                </svg>
                                <span>create</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('dashboard')

    @foreach ($checklist as $key => $c)
        <div class="checklist-card">
            <a href="{{ route('task.create', ['id' => $c->id]) }}" class="text-white d-block w-100">
                <span class="d-inline" style="font-size: 8pt; color: rgb(var(--quat-c));">
                    {{ date('d-m-Y', strtotime($c->listDate)) }}
                </span>
                <h5>
                    {{ $c->name }}
                </h5>
            </a>
            <div class="actions">
                <!-- Button trigger modal -->
                <button type="button" class="btnG btnG-light-green" data-bs-toggle="modal"
                    data-bs-target="#editList{{ $key }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                        <path
                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                    </svg>
                </button>

                <form action="{{route('checklist.delete')}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $c->id }}">
                    <button type="submit" class="btnG btnG-light-green">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </button>
                </form>


                <!-- Modal -->
                <div class="modal fade" id="editList{{ $key }}" tabindex="-1"
                    aria-labelledby="editList{{ $key }}Label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <form action="{{ route('checklist.edit') }}"
                                    class="newChecklist d-flex flex-column justify-content-around align-items-start gap-2 p-2 px-4 w-100"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <legend class="text-center"> Edit To-do List </legend>
                                    <div>
                                        <label for="name" class="form-label"> name </label>
                                        <textarea name="name" id="name" cols="58" rows="1" class="form-control">{{ $c->name }}</textarea>
                                    </div>
                                    <div class="my-1">
                                        <label for="date" class="form-label"> list date </label>
                                        <input type="date" name="listDate" id="date" class="form-control"
                                            value="{{ $c->listDate }}">
                                    </div>
                                    <input type="hidden" name="id" value="{{ $c->id }}">

                                    <div class="w-100 d-flex justify-content-end mt-1 my-2">
                                        <button class="btnG btnG-light-green d-flex align-items-center gap-2"
                                            type="submit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                            </svg>
                                            <span>edit</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

@endsection



{{-- <form action="#" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{ $c->id }}"> --}}
