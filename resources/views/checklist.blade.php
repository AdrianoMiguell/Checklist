@extends('layouts.app')

@section('dashboard')
    <div class="text-start w-100 mx-5 my-2">

        <div class="d-flex align-items-center justify-content-between" style="margin: 0 .75rem">
            <h3> <i class="bi bi-card-checklist"></i> {{ $checklist->name }} </h3>

            <div class="d-flex align-items-center gap-1">
                @include('components.form-create-task')

                @include('components.form-create-many-tasks')

                @include('components.form-delete-all-tasks')
            </div>
        </div>

        @if (isset($tasks) && count($tasks) > 0)
            <div class="checklist-task">
                @foreach ($tasks as $key => $t)
                    <div class="d-flex justify-content-between px-4 rounded-1">
                        <form action="{{ route('task.status') }}" method="POST" class="d-flex gap-2 align-items-center w-100"
                            id="form{{ $key }}">
                            @csrf
                            <input type="checkbox" name="status" id="status{{ $key }}"
                                onChange="this.form.submit()"
                                @if ($t->conclusion == true) @checked(true)
                                @class(['task-checked' => true]) @endif>
                            <label for="status{{ $key }}" class="d-block w-100" style="cursor: pointer;">
                                <div class="d-grid text-start">
                                    <span>{{ $t->description }}</span>
                                    <span style="font-size: 7pt;">
                                        {{ date('H:i', strtotime($t->start_time)) }}
                                        -
                                        {{ date('H:i', strtotime($t->end_time)) }}
                                    </span>
                                </div>
                            </label>
                            <input type="hidden" name="id" value="{{ $checklist->id }}">
                            <input type="hidden" name="task_id" value="{{ $t->id }}">
                        </form>

                        <div class="d-flex gap-2 mx-2">
                            <div class="actions">
                                @include('components.modal-edit-task')

                                @include('components.form-delete-task')
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="mx-auto h-100 d-flex flex-column justify-content-center text-center gap-1">
                <a
                    href="https://br.freepik.com/vetores-gratis/ilustracao-do-conceito-de-lista-de-verificacao-de-objetivos-pessoais_28766054.htm#query=tasks%20and%20checklist&position=20&from_view=search&track=ais">
                    <img src="./img/svg-checklist-for-dashboard.svg"
                        alt="checklist for task list for the smooth running of appointments" class="img-dashboard-empty">
                </a>
                <span> No tasks so far </span>
            </div>
        @endif
    </div>

@endsection
