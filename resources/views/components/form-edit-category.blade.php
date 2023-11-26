<!-- Create new category -->
<div class="modal fade" id="editCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true"
    style="--bs-modal-width: 400px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body p-2">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($category as $key => $categ)
                        <div class="accordion-item"
                            style=" --bs-accordion-active-bg: rgba(var(--sec-c), .4);">
                            
                            {{-- /* --bs-accordion-border-color: rgb(var(--quat-c));" */ --}}
                            
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree{{ $key }}" aria-expanded="false"
                                    aria-controls="flush-collapseThree{{ $key }}">
                                    {{ $categ->name }}
                                </button>
                            </h2>
                            <div id="flush-collapseThree{{ $key }}" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <form action="{{ Route('category.edit') }}" method="POST" class="mb-0"
                                        enctype="multipart/form-data">
                                        @csrf
                                        {{-- class="d-flex flex-column justify-content-around align-items-start p-2 px-4 w-100 gap-2"  --}}
                                        <div>
                                            <label for="name" class="form-label"> Name </label>
                                            <input name="name" id="name" class="form-control"
                                                value="{{ $categ->name }}" />
                                        </div>
                                        <div>
                                            <label for="img_icon" class="form-label"> icon </label>
                                            <input type="file" name="img_icon" class="fomr-control">
                                        </div>

                                        <input type="hidden" name="icon" class="form-control"
                                            value="{{ $categ->icon }}">
                                        <input type="hidden" name="id" class="form-control"
                                            value="{{ $categ->id }}">

                                        <div class="w-100 d-flex justify-content-end mt-2" style="translate: 0 15px; z-index: 1;">
                                            <button class="btnG btnG-light-green d-flex align-items-center gap-2 my-0"
                                                type="submit" style="z-index: 2">
                                                <i class="bi bi-clipboard2-plus-fill"></i>
                                                <span>edit</span>
                                            </button>
                                        </div>
                                    </form>

                                    <form action="{{ route('category.delete') }}" method="POST"
                                        style="translate: 0 -20px;"
                                        class="d-inline-block">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $categ->id }}">
                                        <button class="btnG btnG-light-green d-flex align-items-center my-0"
                                            type="submit"
                                            onclick="return confirm('Você quer mesmo deletar essa categoria? (Ação irrevérsivel)')">
                                            <i class="bi bi-trash-fill"></i>
                                            <span>delete</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
</div>
