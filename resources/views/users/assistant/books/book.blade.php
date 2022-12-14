<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">

                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-vertical" action="{{ route('assistant.updateBook') }}" method="post">
                            <input type="hidden" name='book_id' value="{{ $book->id }}">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="writer-adi-icon">Kitap ID
                                                @error('id')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="id" value="{{ $book->id }}"
                                                    class="form-control" placeholder="Kitap ID giriniz"
                                                    id="book-id-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-grid-3x3-gap-fill"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Kitap Resmi
                                                @error('book_img')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                    <img
                                                    src="{{ str_replace('public', '/storage', $book->book_img) }}" width="80"
                                                    height="100" class="img img-responsive">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Kitap Ad??
                                                @error('book_name')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="book_name" type="text" value="{{ $book->book_name }}"
                                                    class="form-control" placeholder="Kitap ad?? giriniz"
                                                    id="book-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="book-name-icon">Bas??m Y??l??
                                                @error('publication_year')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input name="publication_year" type="text" value="{{ $book->publication_year }}"
                                                    class="form-control" placeholder="Kitap ad?? giriniz"
                                                    id="book-name-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-book-half"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="yazar-adi-icon">Cilt Say??s??
                                                @error('volume_number')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="volume_number" value="{{ $book->volume_number }}"
                                                    class="form-control" placeholder="Yazar ad?? giriniz"
                                                    id="yazar-adi-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-person"></i>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="yazar-adi-icon">Sayfa Say??s??
                                                @error('page_number')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <input type="text" name="page_number" value="{{ $book->page_number }}"
                                                    class="form-control" placeholder="Bas??m y??l?? giriniz"
                                                    id="basim-yili-icon">
                                                <div class="form-control-icon">
                                                    <i class="bi bi-brightness-high"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
{{--                                     <div class="col-12">
                                        <div class="form-group has-icon-left">
                                            <label for="kitap-turu-icon">Kitap T??r??
                                                @error('kitap_turu')
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                @enderror
                                            </label>
                                            <div class="position-relative">
                                                <div class="input-group mb-3">
                                                    <select class="form-select form-control" id="inputGroupSelect01"
                                                        class="form-control" name="kitap_turu"
                                                        placeholder="Kitap t??r??n?? giriniz">
                                                        <option selected value="{{ $book->kitap_turu }}">
                                                            {{ $book->kitap_turu }}</option>
                                                        <option value="Dram">Dram</option>
                                                        <option value="Macera">Macera</option>
                                                        <option value="Aksiyon">Aksiyon</option>
                                                        <option value="Polisiye">Polisiye</option>
                                                        <option value="Korku">Korku</option>
                                                        <option value="Fantastik">Fantastik</option>
                                                        <option value="Bilim Kurgu">Bilim Kurgu</option>
                                                    </select>
                                                </div>
                                                <div class="form-control-icon">
                                                    <i class="bi bi-list-ul"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class=" container">
                                        <div class="d-flex row  col-12 ">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">G??ncelle</button>
                                        </div>
                                        <div class="d-flex row  col-12 ">
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                        <div class="d-flex row col-12 ">
                                            <button onclick="$('#deleteBookForm').submit();" type="button"
                                                class="btn btn-danger me-1 mb-1">Sil</button>
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



<form method="post" action="{{ route('assistant.deleteBook', $book->id) }}" id="deleteBookForm">
    @method('delete')
    @csrf
</form>
