@extends('layouts.main')

@section('container')

<link rel="stylesheet" href="css/login.css">




<section class="vh-100">

  @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  @if (session()->has('sukses'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('sukses') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/kabulet.png" class="img-fluid" alt="">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <h4 class="mt-3 mb-4 fw-normal">Login Sekarang</h4>
        <form action="/login" method="post">
        @csrf

         <div class="form-floating">
            <input type="email" name="email" class="form-control rounded-bottom-0 @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
            <label for="email">Email</label>
            @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="password" name="password" class="form-control rounded-top-0" id="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>

          <div class="text-center text-lg-start mt-2 pt-2">
            <button type="submit" class="btn btn-primary">Login</button>
            <p class="small mt-2 pt-1 mb-0">Belum punya akun? <a href="/register">Registrasi Sekarang!</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>

@endsection
