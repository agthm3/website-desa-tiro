@extends('layouts.dashboard')

@section('content')
    <!-- Form Start -->
    {{-- @dd($news) --}}
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-12">
                <h1>Tambahkan Berita Baru</h1>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('dashboard.destination.edit', $destination) }}" method="get">
                        @csrf
                        <h6 class="mb-4">Gambar</h6>
                        <div class="mb-3">
                            <img src="{{ url('storage/' . $destination->image) }}" height="100px" alt="">
                        </div>

                        <div class="form-floating mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>{{ $destination->title }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <p>{{ $destination->kategori }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating">
                            <p>
                            <div class="card">
                                <div class="card-body">
                                    {!! $destination->article !!}</div>
                            </div>
                            </p>
                        </div>
                        <button type="submit" class="btn btn-primary mt-2">
                            Edit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->
@endsection
