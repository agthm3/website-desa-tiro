@extends('layouts.dashboard')

@section('content')
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Daftar Pengumuman</h6>
                <a href="{{ route('dashboard.announcement.create') }}">Tambah Pengumuman Baru</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">
                                <input class="form-check-input" type="checkbox" />
                            </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Title</th>
                            <th scope="col">Author</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($announcements as $announcement)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $announcement->created_at->format('d M Y') }}</td>
                                <td>{{ $announcement->title }}</td>
                                <td>Test</td>
                                <td>
                                    <a class="btn btn-info text-white"
                                        href="{{ route('dashboard.announcement.show', $announcement) }}"
                                        href="">Detail</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
@endsection
