@extends ('layouts.main')

@include('partials.navbar')
<main>
  <div class="container">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-down-left" data-aos-duration="800">
        <img src="img/logo.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="388" height="326" loading="lazy">
      </div>
      <div class="col-lg-6" data-aos="fade-up-right" data-aos-duration="800">
        <h1 class="fw-bold lh-1 mb-3">Layanan dan Pengaduan Masyarakat</h1>
        <p>Berikan suaramu dan kita akan mendengarkan. Layanan pengaduan masyarakat kami hadir untuk memastikan masalahmu terdengar dan diselesaikan dengan cepat. Laporkan masalahmu sekarang dan bersama kita perbaiki situasi untuk kebaikan bersama.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        @auth
        <a type="button" class="btn btn-primary px-4" href="/dashboard">Lapor</a>
        @else
        <a type="button" class="btn btn-primary px-4" href="/login">Lapor</a>
        @endauth
        </div>
      </div>
    </div>
  </div>
</main>

@auth

<div class="cta bg-primary bg-opacity-75">
  <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 p-4">
        <div class="col-md-4 d-flex align-items-center">
          <h3 class="mb-3 mb-md-0">Tulis aduanmu sekarang!</h3>
        </div>
        <a class="btn btn-outline-primary" href="/dashboard">Lapor</a>
      </footer>
  </div>
</div>

@else

<div class="cta bg-primary bg-opacity-75">
  <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 p-4">
        <div class="col-md-4 d-flex align-items-center">
          <h3 class="mb-3 mb-md-0">Login untuk menulis aduan!</h3>
        </div>
        <a class="btn btn-outline-primary" href="/login">Login</a>
      </footer>
  </div>
</div>

@endauth

@section('guide')

<h2 class="text-center mt-4 mb-2" data-aos="flip-right" data-aos-duration="1500">Tata cara pengaduan</h2>

@include('partials.guide')

@endsection

@section('review')
<div class="cta bg-primary bg-opacity-75">
    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 p-4">
          <div class="col-md-4 d-flex align-items-center">
            <h3 class="mb-3 mb-md-0"></h3>
          </div>
        </footer>
    </div>
  </div>
<main>
    <div class="container">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-down-left" data-aos-duration="800">
          <img src="img/indexr.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6" data-aos="fade-up-right" data-aos-duration="800">
          <h1 class="fw-bold lh-1 mb-3">Gelombang Kepedulian</h1>
          <p>Kami percaya bahwa setiap pasien memiliki cerita unik. Mari kita bagikan cerita Anda dengan ulasan! Bersama-sama, kita dapat membangun komunitas yang peduli dan mendukung.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          @auth
          <a type="button" class="btn btn-primary px-4" href="/review">Review</a>
          @else
          <a type="button" class="btn btn-primary px-4" href="/review">Review</a>
          @endauth
          </div>
        </div>
        <div class="cta bg-primary bg-opacity-75">
            <div class="container">
                <footer class="d-flex flex-wrap justify-content-between align-items-center my-4 p-4">
                    <h3 class="mb-3 mb-md-0 me-4">Follow Kami</h3>
                    <ul class="list-unstyled d-flex mb-0">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li class="me-4 d-flex align-items-center"><a href="mailto:rumahsakitpolrikramatjati@gmail.com" class="text-white"><i class="bi bi-telephone-fill" style="font-size: rem;"></i></a></li>
                        <li class="me-4 d-flex align-items-center"><a href="mailto:rumahsakitpolrikramatjati@gmail.com" class="text-white"><i class="bi bi-envelope-fill" style="font-size: 2rem;"></i></a></li>
                        <li class="me-4 d-flex align-items-center"><a href="https://www.instagram.com/rumahsakitpolrikramatjati/" class="text-white"><i class="bi bi-instagram" style="font-size: 2rem;"></i></a></li>
                        <li class="d-flex align-items-center"><a href="https://www.youtube.com/@RumahSakitPolriKramatJati/videos" class="text-white"><i class="bi bi-youtube" style="font-size: 2rem;"></i></a></li>
                    </ul>
                    <div class="col-md-4 d-flex align-items-center">
                        <h3 class="mb-3 mb-md-0"></h3>
                    </div>
                </footer>
            </div>
        </div>






    </div>
    </div>

  </main>
  @endsection


@section('footer')

@include('partials.footer')

@endsection
