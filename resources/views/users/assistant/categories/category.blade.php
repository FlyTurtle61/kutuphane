<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" enctype="multipart/form-data" action="{{ route('assistant.updateCategory') }}" method="post">
                            <input type="hidden" name='category_id' value="{{ $category->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-adi-icon">Kategori ID
                                                @error("id")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="id" value="{{ $category->id }}"
                                                    class="form-control" placeholder="Yazar ID giriniz" id="writer-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Kategori Resmi
                                            </label>
                                            <div class="position-relative">
                                                    <img
                                                    src="{{ str_replace('public', '/storage', $category->category_img) }}" width="80"
                                                    height="100" class="img img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="category-name-icon">Kategori ??smi
                                                @error("category_name")
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="category_name" type="text" value="{{ $category->category_name }}"
                                                    class="form-control" placeholder="Kategori ismi giriniz"
                                                    id="writer-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-file-arrow-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" container">
                                        <div class="d-flex row  col-12 ">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">G??ncelle</button>
                                        </div>
                                        <div class="d-flex row  col-12 ">
                                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        <div class="d-flex row col-12 ">
                                            <button onclick="$('#deleteCategoryForm').submit();" type="button" class="btn btn-danger me-1 mb-1">Sil</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<form method="post" action="{{ route('assistant.deleteCategory',$category->id) }}" id="deleteCategoryForm">
    @method("delete")
    @csrf
</form>
