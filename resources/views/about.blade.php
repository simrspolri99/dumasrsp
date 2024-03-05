@extends('layouts.main')

@include('partials.navbar')

@section('container')
    <h1 class="text-center mt-5">Apa itu DUMAS-RS.POLRI?</h1>
    <div class="d-flex align-items-center justify-content-center">
        <hr class="border-primary w-50">
    </div>

@include('partials.carousel')

<article class="mb-5">
    <p> Layanan pengaduan masyarakat RS.POLRI TK.I PUSDOKKES POLRI merupakan sebuah inisiatif yang bertujuan untuk memberikan akses yang lebih mudah bagi masyarakat dalam menyampaikan keluhan atau masalah terkait pelayanan kesehatan yang diberikan oleh institusi ini. Dengan adanya layanan ini, diharapkan masyarakat dapat merasa lebih terbuka dan nyaman dalam menyampaikan pengalaman mereka, sehingga pihak RS.POLRI TK.I PUSDOKKES POLRI dapat secara cepat merespons dan menindaklanjuti setiap masalah yang muncul.</p>

    <p> Melalui layanan pengaduan ini, masyarakat dapat melaporkan berbagai macam masalah seperti pelayanan yang kurang memuaskan, ketidaksesuaian prosedur medis, keluhan terhadap fasilitas, atau pun masukan untuk perbaikan secara keseluruhan. Proses pengaduan dilakukan secara online melalui aplikasi atau platform khusus yang disediakan oleh RS.POLRI TK.I PUSDOKKES POLRI, sehingga memudahkan masyarakat dalam menyampaikan aspirasi mereka tanpa perlu datang secara langsung ke lokasi.</p>
    <p>Pihak RS.POLRI TK.I PUSDOKKES POLRI akan menanggapi setiap pengaduan dengan cepat dan tanggap, serta melakukan tindakan yang diperlukan untuk menyelesaikan masalah tersebut. Selain itu, informasi mengenai proses penanganan pengaduan juga akan disampaikan kepada masyarakat, sehingga tercipta transparansi dan kepercayaan yang lebih dalam hubungan antara institusi kesehatan dan masyarakat yang dilayani. Dengan demikian, layanan pengaduan ini diharapkan dapat meningkatkan kualitas pelayanan serta kepuasan masyarakat terhadap RS.POLRI TK.I PUSDOKKES POLRI secara keseluruhan..</p>
</article>

@endsection

@section('footer')

@include('partials.footer')

@endsection

