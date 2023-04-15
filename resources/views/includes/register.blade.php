@extends('layouts.auth')

@section('content')
    <!-- ================ contact section start ================= -->

    <section class="vh-100" style="background-color: white">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Registrasi Akun Baru</h3>

                            <form action="{{ route('register') }}" method="POST">@csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Nama</label>
                                    <input type="text" name="name" id="typeEmailX-2"
                                        class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input type="email" name="email" id="typeEmailX-2"
                                        class="form-control form-control-lg" />
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input type="password" name="password" id="typePasswordX-2"
                                        class="form-control form-control-lg" />
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Konfirmasi Password</label>
                                    <input name="password_confirmation" type="password" id="typePasswordX-2"
                                        class="form-control form-control-lg" />
                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    Registrasi
                                </button>

                            </form>
                            <hr class="my-4" />

                            <p>
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="text-info">Login Sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
