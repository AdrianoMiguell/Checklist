<button type="button" class="btnG btnG-green rounded-circle p-1 px-2" data-bs-toggle="modal"
    data-bs-target="#createManyTasks" id="modalCreateManyTasks">
    <i class="bi bi-plus-square-fill" style="font-size: 15pt;"></i>
</button>

<!-- Modal for Import New Tasks -->
<div class="modal fade" id="createManyTasks" tabindex="-1" aria-labelledby="createManyTasksLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ Route('task.createManyTasks') }}"
                    class="formChecklist d-flex flex-column justify-content-around align-items-center p-2 px-4 w-100"
                    method="POST">
                    @csrf
                    <legend class="text-center"> <i class="bi bi-file-earmark-arrow-down"></i>
                        Importar Task </legend>

                    <label>
                        Create many tasks at once. Write each task on a new line.
                    </label>

                    <div class="mt-2 mx-3 w-100">
                        <label for="import_description" class="form-label"> <i class="bi bi-card-text"></i> Tasks
                        </label>
                        <textarea type="text" name="description" id="import_description" class="form-control" rows="6"> </textarea>
                        <input type="hidden" name="checklist_id" value="{{ $checklist->id }}">
                    </div>

                    <div class="mx-3 w-100 mt-3">
                        <label class="form-label"> <i class="bi bi-clock-fill"></i>
                            Task time
                        </label>
                        <div class="w-100 d-flex justify-content-between gap-1">
                            <div class="w-50">
                                <label for="create_start_time" class="form-label"> <i class="bi bi-hourglass-top"></i>
                                    Start
                                </label>
                                <input type="time" name="start_time" id="create_start_time" class="form-control" />
                            </div>
                            <div class="w-50">
                                <label for="create_end_time" class="form-label"> <i class="bi bi-hourglass-bottom"></i>
                                    End
                                </label>
                                <input type="time" name="end_time" id="create_end_time" class="form-control" />
                            </div>
                        </div>
                    </div>


                    <div class="w-100 d-flex justify-content-end my-4">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                            <i class="bi bi-clipboard2-plus-fill" style="font-size: 13;"> </i>
                            <span>create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
