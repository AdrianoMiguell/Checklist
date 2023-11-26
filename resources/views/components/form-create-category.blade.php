<!-- Create new category -->
<div class="modal fade" id="newCategory" tabindex="-1" aria-labelledby="newCategoryLabel" aria-hidden="true"
    style="--bs-modal-width: 400px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ Route('category.create') }}"
                    class="formChecklist d-flex flex-column justify-content-around align-items-start p-2 px-4 w-100 gap-2"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <legend class="text-center"> Category </legend>
                    <button type="button" class="btn-close position-absolute top-0 mt-2 end-0 mx-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>

                    <div>
                        <label for="name" class="form-label"> Name </label>
                        <input name="name" id="name" class="form-control" />
                    </div>
                    <div>
                        <label for="name" class="form-label"> icon </label>
                        <input type="file" name="icon" class="fomr-control">
                    </div>

                    <div class="w-100 d-flex justify-content-end my-2">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit">
                            <i class="bi bi-clipboard2-plus-fill"></i>
                            <span>create</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
