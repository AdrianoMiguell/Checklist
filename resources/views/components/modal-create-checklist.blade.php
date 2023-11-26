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
                            <div class="d-flex justify-content-between align-items-center">
                                <label for="create-category" class="form-label mb-0"> Category
                                </label>
                                <!-- Button trigger modal -->
                                <button type="button" class="btnG btnG-green d-flex align-items-center p-1 px-2 m-1"
                                    data-bs-toggle="modal" data-bs-target="#newCategory" id="modalCategory">
                                    <i class="bi bi-plus" style="font-size: 10pt"></i>
                                </button>
                                <button type="button" class="btnG btnG-green d-flex align-items-center p-1 px-2 m-1"
                                    data-bs-toggle="modal" data-bs-target="#editCategory" id="modalCategory">
                                    <i class="bi bi-pencil" style="font-size: 10pt"></i>
                                </button>
                            </div>
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

                    <div class="w-100 d-flex justify-content-end my-2">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                            <i class="bi bi-clipboard2-plus-fill"> </i>
                            <span>create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@include('components.form-create-category')

@include('components.form-edit-category')
