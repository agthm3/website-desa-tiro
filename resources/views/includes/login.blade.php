@extends('layouts.auth')

@section('content')
    <!-- ================ contact section start ================= -->

    <section class="vh-100" style="background-color: white">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-5">Sign in</h3>

                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typeEmailX-2">Email</label>
                                    <input name="email" type="email" id="typeEmailX-2"
                                        class="form-control form-control-lg" />

                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="typePasswordX-2">Password</label>
                                    <input name="password" type="password" id="typePasswordX-2"
                                        class="form-control form-control-lg" />

                                </div>

                                <button class="btn btn-primary btn-lg btn-block" type="submit">
                                    Login
                                </button>
                            </form>

                            <hr class="my-4" />

                            <p>
                                Belum punya akun?
                                <a href="{{ route('register') }}" class="text-info">Daftar sekarang</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
