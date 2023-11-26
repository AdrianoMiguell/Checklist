<!-- Button trigger modal -->
<button type="button" class="btnG btnG-light-green" data-bs-toggle="modal" data-bs-target="#editList{{ $key }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill"
        viewBox="0 0 16 16">
        <path
            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
    </svg>
</button>

<!-- Edit New TO-DO List -->
<div class="modal fade" id="editList{{ $key }}" tabindex="-1"
    aria-labelledby="editList{{ $key }}Label" aria-hidden="true" style="--bs-modal-width: 400px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-0">
                <form action="{{ route('checklist.edit') }}"
                    class="formChecklist d-flex flex-column justify-content-around align-items-start gap-2 p-2 px-4 w-100"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <legend class="text-center"> Edit To-do List </legend>
                    <button type="button" class="btn-close position-absolute top-0 mt-2 end-0 mx-2"
                        data-bs-dismiss="modal" aria-label="Close"></button>

                    <div>
                        <label for="name" class="form-label"> name </label>
                        <textarea name="name" id="name" cols="58" rows="1" class="form-control">{{ $c->name }}</textarea>
                    </div>
                    <div class="my-1 d-flex justify-content-between align-items-center w-100 gap-5">
                        <div class="my-1">
                            <label for="createDate" class="form-label"> Date </label>
                            <input type="date" name="listDate" id="createDate" class="date form-control"
                                value="{{ $c->listDate }}">
                        </div>
                        <div class="my-1 d-grid">
                            <label for="create_category" class="form-label"> category </label>
                            <select name="category_id" id="edit_category" class="form-control">
                                @foreach ($category as $key => $categ)
                                    <option value="{{ $categ->id }}"
                                        @if ($categ->id == $c->category_id) @selected(true) @endif>
                                        {{ $categ->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $c->id }}">

                    <div class="w-100 d-flex justify-content-end mt-1 my-2">
                        <button class="btnG btnG-light-green d-flex align-items-center gap-2" type="submit"
                            onclick="return confirm('Tem certeza que deseja editar este checklist?')">
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
