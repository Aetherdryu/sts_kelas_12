@extends ('layout.app')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" rel="stylesheet">


<div class="container d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <section class="jumbotron text-center">
        <div class="container">
            <h1>TENTANG SAYA</h1>
            <p class="lead text-muted">Saya bersekolah di SMK Bakti Nusantara 666, saya memilih jurusan Pengembangan
                Perangkat lunak dan Gim biasa disingkat PPLG, dan saya duduk di kelas 12 PPLG 1, nama wali kelas saya
                Neni Septilia. Saya suka bermain basket, badminton, dan juga bermain game</p>
            <p>
                <a href="/contact" class="btn btn-success my-2">
                    <i class="bi bi-people"></i> Lihat Contact saya
                </a>
            </p>
        </div>
    </section>
</div>




@endsection