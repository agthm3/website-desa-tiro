@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Edit <span class="text-info">{{ $announcement->title }}</span></h1>

                <div class="bg-light rounded h-100 p-4">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('dashboard.announcement.update', $announcement) }}" method="post"
                        enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Gambar</label>
                            <input name="image" class="form-control" type="file" id="formFile" />
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" name="title" value="{{ $announcement->title }}" class="form-control"
                                id="floatingInput" placeholder="name@example.com" />
                            <label for="floatingInput">Judul</label>
                        </div>

                        {{-- <div class="form-floating mb-3">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>
                                    Open this select menu
                                </option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label for="floatingSelect">Kategori</label>
                        </div> --}}
                        <div class="form-floating">
                            <textarea class="form-control" name="article" value="{{ $announcement->article }}" id="floatingTextarea"
                                style="height: 150px" name="article">{{ $announcement->article }}</textarea>

                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
