@extends('layouts.dashboard')

@section('content')
    {{-- @dd($news) --}}
    <!-- Recent Sales Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Artikel Profil Desa</h6>
                @if (count($profils) == 0)
                    <a href="{{ route('dashboard.profil.create') }}">Tambah Berita Baru</a>
                @endif
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
                            <th scope="col">Penulis</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($profils as $item)
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" />
                                </td>
                                <td>{{ $item->created_at->format('d M Y') }}</td>
                                <td>{{ $item->title }}</td>
                                <td>Penulis</td>
                                <td>
                                    <form action="{{ route('dashboard.profil.show', $item) }}" method="get">
                                        <button type="submit" class="btn btn-sm btn-primary">Detail</button>

                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Recent Sales End -->
    <!-- Footer Start -->
@endsection
