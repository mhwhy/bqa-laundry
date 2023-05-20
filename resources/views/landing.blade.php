<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laundry XYZ') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Advent+Pro:wght@400;600&family=Aladin&family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-custom fixed-top">
        <div class="container">
            <img src="{{ asset('img/landing/logo.png') }}" style="max-width:10%" alt="">
            {{-- <a class="navbar-brand" href="">{{ config('app.name') }}</a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">Indonesia</a>
                                <a class="dropdown-item" href="{{url('en')}}">English</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{url('login')}}">@lang('landing.loginOrRegister')</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-hero py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-hero mt-5 mb-2">@lang('landing.welcome')</h1>
                    <p class="lead mb-5 text-hero ">@lang('landing.tagline')</p>
                    <a class="pesan" href="https://wa.me/+6282229328566">Pesan Sekarang</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/hero.jpg')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>@lang('landing.why')</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan  ">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/alat.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan  ">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/tipebaju.png')}}" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, gorden, bed cover,
                        selimut, seprei, karpet, dan lain lain.</p>
                </div>
            </div>
        </div>
    </section>






    <section class="text-center p-5">
        <h3>Temukan kami!</h3>
    </section>

    <section class=" ">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jl. Mayjen Sungkono Gg. Parang Garuda RT 05 RW 02 Dusun Darang Kelurahan, Tamanan, Cengkong, Tamanan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66312</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>bqalaundry@gmail.com</p>
                    <p>+62 822-2932-8566(laila)</p>
                    <p>+62 853-3573-4064(riska)</p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.4375081050316!2d111.69823071110945!3d-8.05677568045987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e791acd716d0e7f%3A0xc9c80d06ea32bcf!2sPPPM%20BQA%20(BAITUL%20QUR&#39;AN%20AL%20FARISY)!5e0!3m2!1sid!2sid!4v1683557199946!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 text-white bg-dark">
        <div class="container">
            <p class="m-0 text-center ">Copyright &copy; {{config('app.name')}} 2023</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
