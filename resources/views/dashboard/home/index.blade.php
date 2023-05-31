@extends('layouts.dashboard')

@section('content')
    {{-- @dd($totalComment) --}}
    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-newspaper fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Berita</p>
                        <h6 class="mb-0">{{ $totalNews }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-bullhorn fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Pengumuman</p>
                        <h6 class="mb-0">{{ $totalAnnouncement }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-comment fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Komentar</p>
                        <h6 class="mb-0">{{ $totalComment }}</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-plane fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Potensi</p>
                        <h6 class="mb-0">{{ $totalDestination }}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->



    <!-- Komentar Berita -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Komentar Berita Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">User</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commentsnews as $item)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $item->created_at->format(' d M Y') }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->news->title }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Komentar-->

    <!-- Komentar Penguman -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Komentar Pengumuman Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">User</th>
                            <th scope="col">Judul Pengumuman</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($commentsannouncement as $item)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $item->created_at->format(' d M Y') }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->announcement->title }}</td>
                                <td>{{ $item->comment }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Komentar-->

    <!-- Berita Terbaru  -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0"> Berita Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">User</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $item)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $item->created_at->format(' d M Y') }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Berita Terbaru -->
    <!-- Pengumuman Terbaru  -->
    <div class="container-fluid pt-4 px-4 mb-2">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0"> Pengumuman Terbaru</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">User</th>
                            <th scope="col">Judul Berita</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcement as $item)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $item->created_at->format(' d M Y') }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a class="btn btn-sm btn-primary" href="">Hapus</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--Pengumuman  Terbaru -->
@endsection
