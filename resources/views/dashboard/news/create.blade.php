@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Tambahkan Berita Baru</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.news.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input name="image" class="form-control" type="file" id="formFile" />
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="title" class="form-control" id="floatingInput"
                                placeholder="name@example.com" />
                            <label for="floatingInput">Judul</label>
                        </div>

                        <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>
                                    Open this select menu
                                </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Kategori</label>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="article" placeholder="Leave a comment here" id="floatingTextarea"
                                style="height: 150px" name="article"></textarea>
                            <label for="floatingTextarea">Berita</label>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
