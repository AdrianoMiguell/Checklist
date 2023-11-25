<!-- Button trigger modal -->
<button type="button" class="btnG btnG-green rounded-circle p-1" data-bs-toggle="modal" data-bs-target="#newTask"
    id="modaList">
    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-plus"
        viewBox="0 0 16 16">
        <path
            d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg>
</button>

<!-- Modal for Create New Task -->
<div class="modal fade" id="newTask" tabindex="-1" aria-labelledby="newTaskLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ Route('task.create') }}"
                    class="formChecklist d-flex flex-column justify-content-around align-items-center p-2 px-4 w-100"
                    method="POST">
                    @csrf
                    <legend class="text-center"> <i class="bi bi-card-checklist"></i> New Task </legend>
                    <div class="mx-3 w-100">
                        <label for="create_description" class="form-label"> <i class="bi bi-card-text"></i>
                            Description
                        </label>
                        <textarea type="text" name="description" id="create_description" class="form-control" maxlength="245"> </textarea>
                        <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
                    </div>

                    <div class="mx-3 w-100 mt-3">
                        <label for="create_time_task" class="form-label"> <i class="bi bi-card-text"></i>
                            Task time
                        </label>
                        <input type="time" name="time_task" id="create_time_task" class="form-control" />
                    </div>

                    <div class="w-100 d-flex justify-content-end my-4">
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
