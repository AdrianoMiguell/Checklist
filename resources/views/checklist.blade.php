@extends('layouts.app')

@section('dashboard')
    <div class="text-start w-100 m-5">

        <div class="d-flex align-items-center justify-content-between mx-5">
            <h3> Checklist : {{ $checklist->name }} </h3>

            <!-- Button trigger modal -->
            <button type="button" class="btnG btnG-green rounded-circle p-1" data-bs-toggle="modal" data-bs-target="#newTask"
                id="modaList">
                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-plus"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>
            </button>
        </div>

        <div class="checklist-task">
            @if (isset($tasks) && !empty($tasks))
                @foreach ($tasks as $key => $t)
                    <div class="d-flex justify-content-between px-4 rounded-1">
                        <form action="{{ route('task.status') }}" method="POST"
                            class="d-flex gap-2 align-items-center w-100"
                            id="form{{ $key }}">
                            @csrf
                            <input type="checkbox" name="status" id="status{{ $key }}"
                                onChange="this.form.submit()"
                                @if ($t->conclusion == true) @checked(true)
                                @class(['task-checked' => true]) @endif>
                            <label for="status{{ $key }}" class="d-block w-100" style="cursor: pointer;"> {{ $t->description }}
                                {{-- @if ($t->conclusion == true)
                                    Escolhido
                                @endif --}}
                            </label>
                            <input type="hidden" name="id" value="{{ $checklist->id }}">
                            <input type="hidden" name="task_id" value="{{ $t->id }}">
                        </form>
                        <div class="d-flex gap-2 mx-2">
                            <div class="actions">
                                <!-- Button trigger modal -->
                                <button type="button" class="btnG btnG-light-green p-1" data-bs-toggle="modal"
                                    data-bs-target="#editTask{{ $key }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </button>
                                <form action="{{ route('task.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $t->id }}">
                                    <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
                                    <button type="submit" class="btnG btnG-light-green p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                        </svg>
                                    </button>
                                </form>
                               
                                <!-- Modal -->
                                <div class="modal fade" id="editTask{{ $key }}" tabindex="-1"
                                    aria-labelledby="editTask{{ $key }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body p-0">
                                                <form action="{{ route('task.edit') }}"
                                                    class="newChecklist d-flex flex-column justify-content-around align-items-start gap-2 p-2 px-4 w-100"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <legend class="text-center"> Edit To-do List </legend>
                                                    <div>
                                                        <label for="description" class="form-label"> description </label>
                                                        <textarea name="description" id="description" cols="58" rows="1" class="form-control">{{ $t->description }}</textarea>
                                                    </div>
                                                    <input type="hidden" name="id" value="{{ $t->id }}">
                                                    <input type="hidden" name="checklist_id"
                                                        value="{{ $t->checklist_id }}">
                                                    <div class="w-100 d-flex justify-content-end mt-1 my-2">
                                                        <button
                                                            class="btnG btnG-light-green d-flex align-items-center gap-2"
                                                            type="submit">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" fill="currentColor" class="bi bi-pencil-fill"
                                                                viewBox="0 0 16 16">
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
                    </div>
                @endforeach
            @else
                <span class="text-white"> No task found </span>
            @endif
        </div>

    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="newTask" tabindex="-1" aria-labelledby="newTaskLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ Route('newTask.create') }}"
                    class="newChecklist d-flex flex-column justify-content-around align-items-center p-2 px-4 w-100"
                    method="POST">
                    @csrf
                    <legend class="text-center"> New Task </legend>
                    <div class="mx-3 w-100">
                        <label for="description" class="form-label"> Description </label>
                        <input type="text" name="description" id="description" class="form-control"
                            maxlength="250" />
                        <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
                    </div>

                    <div class="w-100 d-flex justify-content-end my-4">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                fill="currentColor" class="bi bi-clipboard2-plus-fill" viewBox="0 0 16 16">
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
