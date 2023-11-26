<!-- Button trigger modal -->
<button type="button" class="btnG btnG-light-green" data-bs-toggle="modal" data-bs-target="#editTask{{ $key }}">
    <i class="bi bi-pencil-square"></i>
</button>

<!-- Modal to edit task -->
<div class="modal fade" id="editTask{{ $key }}" tabindex="-1" aria-labelledby="editTask{{ $key }}Label"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ route('task.edit') }}"
                    class="formChecklist d-flex flex-column justify-content-around align-items-start gap-2 p-2 px-4 w-100"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <legend class="text-center"> Edit To-do List </legend>
                    <div>
                        <label for="edit_description" class="form-label"> Description
                        </label>
                        <textarea name="description" id="edit_description" cols="58" rows="1" class="form-control" autofocus>{{ $t->description }} </textarea>
                    </div>
                    <input type="hidden" name="id" value="{{ $t->id }}" />
                    <input type="hidden" name="checklist_id" value="{{ $t->checklist_id }}" />

                    <div class="mt-2 w-100 d-flex justify-content-between gap-1">
                        <div class="w-50">
                            <label for="create_start_time" class="form-label"> <i class="bi bi-hourglass-top"></i>
                                Start
                            </label>
                            <input type="time" name="start_time" id="create_start_time" class="form-control" value="{{ $t->start_time }}" />
                        </div>
                        <div class="w-50">
                            <label for="create_end_time" class="form-label"> <i class="bi bi-hourglass-bottom"></i>
                                End
                            </label>
                            <input type="time" name="end_time" id="create_end_time" class="form-control" value="{{ $t->end_time }}" />
                        </div>
                    </div>

                    <div class="mt-2 d-grid gap-1">
                        <label for="checklist_id">
                            Mudar para
                        </label>
                        <select name="checklist_id" id="checklist_id" class="form-control border-1">
                            @foreach ($all_checklists as $todos)
                                <option value="{{ $todos->id }}" @if ($todos->id == $checklist->id) selected @endif>
                                    {{ $todos->name }}
                                    ({{ date('d/m/Y', strtotime($todos->listDate)) }})
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="w-100 d-flex justify-content-end mt-1 my-2">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-fill" viewBox="0 0 16 16">
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
