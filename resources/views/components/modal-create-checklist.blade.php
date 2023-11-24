
    <!-- Button trigger modal -->
    <button type="button" class="btnG btnG-green ms-5 d-flex align-items-center gap-1" data-bs-toggle="modal"
        data-bs-target="#newList" id="modalList">
        <i class="bi bi-plus fs-5"></i>
        <span class="text-create-list" id="text-create-list"> create </span>
    </button>

    <!-- Create New TO-DO List -->
    <div class="modal fade" id="newList" tabindex="-1" aria-labelledby="newListLabel" aria-hidden="true"
        style="--bs-modal-width: 400px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <form action="{{ Route('checklist.create') }}"
                        class="formChecklist d-flex flex-column justify-content-around align-items-start p-2 px-4 w-100 gap-2"
                        method="POST">
                        @csrf
                        <legend class="text-center"> To-do List </legend>
                        <div>
                            <label for="name" class="form-label"> Name </label>
                            <textarea name="name" id="name" cols="50" rows="1" class="form-control" maxlength="80"></textarea>
                        </div>
                        <div class="my-1 d-flex justify-content-between align-items-center w-100 gap-5">
                            <div class="my-1">
                                <label for="createDate" class="form-label"> Date </label>
                                <input type="date" name="listDate" id="createDate" class="date form-control">
                            </div>
                            <div class="my-1 d-grid">
                                <label for="create-category" class="form-label"> Category </label>
                                <div class="d-flex justify-content-between gap-1">
                                    <select name="category_id" id="create_category" class="form-control">
                                        @foreach ($category as $key => $categ)
                                            <option value="{{ $categ->id }}"
                                                @if ($key == 0) @selected(true)
                                                    @php
                                                        $image_category = $categ->icon;
                                                    @endphp @endif>
                                                {{ $categ->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
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