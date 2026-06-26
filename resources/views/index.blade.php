<!doctype html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GalonKu - Air Bersih Berkualitas</title>


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">


    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }


        html {
            scroll-behavior: smooth;
        }


        body {
            background: #f8fafc;
        }



        /* NAVBAR */


        .navbar {

            background: white;

            box-shadow: 0 3px 15px rgba(0, 0, 0, .08);

        }



        .nav-link {

            transition: .3s;

        }


        .nav-link:hover {

            color: #0d6efd;

        }




        /* HERO */


        .hero {

            height: 100vh;

            background:

                url("https://images.unsplash.com/photo-1548839140-29a749e1cf4d?q=80&w=1200") center/cover;


            display: flex;

            align-items: center;

            position: relative;

            color: white;

        }


        .hero::before {

            content: "";

            position: absolute;

            inset: 0;

            background: rgba(0, 80, 160, .65);

        }



        .hero .container {

            position: relative;

            z-index: 2;

        }




        .btn-custom {


            background: #38bdf8;

            border: none;

            padding: 13px 30px;

            border-radius: 30px;

            font-weight: 600;

            color: white;


            transition: .3s;


        }



        .btn-custom:hover {

            background: #0284c7;

            transform: translateY(-3px);

        }




        /* SECTION */


        .section-title {

            font-weight: 700;

            color: #0f172a;

        }




        .card {

            transition: .4s;

        }



        .card:hover {

            transform: translateY(-8px);

            box-shadow: 0 20px 40px rgba(0, 0, 0, .15) !important;

        }





        /* IMAGE */


        img {

            transition: .4s;

        }


        img:hover {

            transform: scale(1.03);

        }





        .gallery img {


            height: 260px;

            width: 100%;

            object-fit: cover;

            border-radius: 25px;

        }
    </style>


</head>


<body>




    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg fixed-top">


        <div class="container">


            <a class="navbar-brand fw-bold text-primary fs-4" href="#">

                💧 GalonKu

            </a>



            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">

                <span class="navbar-toggler-icon"></span>

            </button>



            <div class="collapse navbar-collapse" id="navbar">


                <ul class="navbar-nav ms-auto">


                    <li class="nav-item">

                        <a href="#tentang" class="nav-link">

                            Tentang

                        </a>

                    </li>


                    <li class="nav-item">

                        <a href="#layanan" class="nav-link">

                            Layanan

                        </a>

                    </li>


                    <li class="nav-item">

                        <a href="#gallery" class="nav-link">

                            Gallery

                        </a>

                    </li>



                    <li class="nav-item">

                        <a href="#kontak" class="nav-link">

                            Kontak

                        </a>

                    </li>


                </ul>


            </div>


        </div>


    </nav>







    <!-- HERO -->


    <section class="hero">


        <div class="container text-center">


            <div data-aos="zoom-in">


                <h1 class="display-3 fw-bold">


                    Air Bersih,
                    <br>

                    Mudah Sampai Rumah


                </h1>



                <p class="lead mt-4">


                    GalonKu menyediakan air minum berkualitas dengan layanan pemesanan dan pengantaran cepat.


                </p>



                <a href="/admin" class="btn btn-custom mt-3">


                    Pesan Galon Sekarang


                </a>



            </div>


        </div>


    </section>







    <!-- TENTANG -->


    <section id="tentang" class="py-5">


        <div class="container">


            <div class="card border-0 shadow rounded-5 overflow-hidden">


                <div class="row align-items-center">


                    <div class="col-lg-6 p-4">


                        <img src="https://images.unsplash.com/photo-1564419320461-6870880221ad?q=80&w=1000"
                            class="img-fluid rounded-5 shadow">


                    </div>




                    <div class="col-lg-6 p-5">


                        <h2 class="section-title mb-4">

                            Tentang GalonKu

                        </h2>



                        <p class="text-secondary fs-5">


                            GalonKu merupakan layanan air minum isi ulang yang menyediakan air bersih berkualitas untuk
                            kebutuhan rumah tangga.


                        </p>



                        <p class="text-secondary fs-5">


                            Dengan sistem digital pelanggan dapat melakukan pemesanan galon dengan mudah dan cepat.


                        </p>



                        <div class="row mt-4">


                            <div class="col-6">


                                <div class="bg-light rounded-4 text-center p-3">


                                    <h3 class="text-primary fw-bold">

                                        10K+

                                    </h3>


                                    Pelanggan


                                </div>


                            </div>



                            <div class="col-6">


                                <div class="bg-light rounded-4 text-center p-3">


                                    <h3 class="text-primary fw-bold">

                                        50K+

                                    </h3>


                                    Galon Terjual


                                </div>


                            </div>


                        </div>



                    </div>


                </div>


            </div>


    </section>







    <!-- LAYANAN -->


    <section id="layanan" class="py-5">


        <div class="container">


            <h2 class="text-center section-title mb-5">

                Layanan GalonKu

            </h2>




            <div class="row g-4">



                <div class="col-lg-4">


                    <div class="card border-0 shadow rounded-5 p-4 text-center">


                        <h1>

                            🚰

                        </h1>


                        <h4>

                            Pesan Galon

                        </h4>


                        <p class="text-secondary">

                            Pemesanan galon secara online dengan proses mudah.

                        </p>


                    </div>


                </div>




                <div class="col-lg-4">


                    <div class="card border-0 shadow rounded-5 p-4 text-center">


                        <h1>

                            🚚

                        </h1>


                        <h4>

                            Antar Galon

                        </h4>


                        <p class="text-secondary">

                            Pengiriman cepat langsung menuju lokasi pelanggan.

                        </p>


                    </div>


                </div>




                <div class="col-lg-4">


                    <div class="card border-0 shadow rounded-5 p-4 text-center">


                        <h1>

                            💧

                        </h1>


                        <h4>

                            Air Berkualitas

                        </h4>


                        <p class="text-secondary">

                            Air bersih yang aman dan nyaman dikonsumsi.

                        </p>


                    </div>


                </div>



            </div>


        </div>


    </section>









    <!-- GALLERY -->


    <section id="gallery" class="py-5">


        <div class="container">


            <h2 class="text-center section-title mb-5">

                Gallery GalonKu

            </h2>



            <div class="row g-4 gallery">



                <div class="col-md-4">

                    <img src="https://images.unsplash.com/photo-1602143303382-7fab7f3d5b7f" class="shadow">

                </div>



                <div class="col-md-4">

                    <img src="https://images.unsplash.com/photo-1548839140-29a749e1cf4d" class="shadow">

                </div>



                <div class="col-md-4">

                    <img src="https://images.unsplash.com/photo-1564419320461-6870880221ad" class="shadow">

                </div>


            </div>


        </div>


    </section>







    <!-- KONTAK -->


    <!-- KONTAK -->

    <section class="py-5" id="kontak">

        <div class="container py-4">


            <div class="card border-0 shadow-lg rounded-5 overflow-hidden" data-aos="fade-up">


                <div class="text-center p-5 pb-0">


                    <h2 class="section-title fw-bold">
                        Kontak GalonKu
                    </h2>


                    <p class="fs-5 text-dark">

                        Hubungi kami untuk pemesanan galon atau informasi layanan

                    </p>


                </div>




                <div class="row g-0 mt-4">


                    <!-- INFO KONTAK -->


                    <div class="col-lg-5 bg-white p-5 d-flex flex-column justify-content-center">


                       

                        <!-- Alamat -->


                        <div class="d-flex align-items-start mb-4">


                            <div class="fs-2 me-3 text-primary">

                                <i class="bi bi-geo-alt-fill"></i>

                            </div>


                            <div>


                                <h5 class="fw-bold mb-1">

                                    Alamat

                                </h5>


                                <p class="mb-0 text-secondary">

                                    Jl. Soekarno Hatta No.456,
                                    <br>

                                    Bandung, Jawa Barat

                                </p>


                            </div>


                        </div>





                        <!-- Email -->


                        <div class="d-flex align-items-start mb-4">


                            <div class="fs-2 me-3 text-primary">

                                <i class="bi bi-envelope-fill"></i>

                            </div>


                            <div>


                                <h5 class="fw-bold mb-1">

                                    Email

                                </h5>


                                <p class="mb-0 text-secondary">

                                    info@galonku.com

                                </p>


                            </div>


                        </div>





                        <!-- Telepon -->


                        <div class="d-flex align-items-start mb-4">


                            <div class="fs-2 me-3 text-primary">

                                <i class="bi bi-telephone-fill"></i>

                            </div>


                            <div>


                                <h5 class="fw-bold mb-1">

                                    Telepon

                                </h5>


                                <p class="mb-0 text-secondary">

                                    0812-3456-7890

                                </p>


                            </div>


                        </div>





                        <!-- Jam Operasional -->


                        <div class="d-flex align-items-start">


                            <div class="fs-2 me-3 text-primary">

                                <i class="bi bi-clock-fill"></i>

                            </div>



                            <div>


                                <h5 class="fw-bold mb-1">

                                    Jam Operasional

                                </h5>


                                <p class="mb-0 text-secondary">

                                    Senin - Jumat : 08.00 - 20.00

                                    <br>

                                    Sabtu - Minggu : 08.00 - 17.00

                                </p>


                            </div>


                        </div>



                    </div>







                    <!-- MAPS -->


                    <div class="col-lg-7">


                        <iframe src="https://www.google.com/maps?q=Bandung&output=embed" width="100%"
                            height="100%" style="border:0; min-height:550px" allowfullscreen="" loading="lazy">

                        </iframe>


                    </div>




                </div>


            </div>


        </div>


    </section>







    <!-- FOOTER -->


    <footer class="bg-dark text-white text-center py-4">


        <h3>

            💧 GalonKu

        </h3>


        <p>

            Air Bersih Mudah Didapat

        </p>


        <p class="text-secondary">

            © 2026 GalonKu

        </p>


    </footer>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>



    <script>
        AOS.init({

            duration: 1000,

            once: true

        });
    </script>


</body>

</html>
