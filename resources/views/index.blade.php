<!doctype html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GalonKu - Air Bersih Berkualitas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        {
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f8fafc;
        }

        .navbar {
            background: white;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
        }

        .nav-link {
            font-weight: 500;
        }

        .nav-link:hover {
            color: #0d6efd;
        }

        .hero {
            height: 100vh;
            background:
                url("{{ asset('template/assets/img/galon.png') }}") center/cover;
            display: flex;
            align-items: center;
            color: white;
        }

        .btn-custom {
            background: #38bdf8;
            border: none;
            padding: 14px 35px;
            border-radius: 50px;
            color: white;
            font-weight: 600;
        }

        .btn-custom:hover {
            background: #0284c7;
        }

        .title {
            font-weight: 700;
            color: #0f172a;
        }

        #tentang .rounded-circle {
            width: 55px;
            height: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
        }

        #tentang img {
            transition: .4s;
        }

        #tentang img:hover {
            transform: scale(1.03);
        }

        .card {
            border: none;
            border-radius: 25px;
        }

        .service-card {
            padding: 35px;
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, .15);
        }

        .service-card {
            border: none;
            border-radius: 25px;
            transition: .3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
        }

        .icon-box {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #e0f2fe;
            color: #0284c7;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 35px;
        }

        .gallery img {
            height: 280px;
            width: 100%;
            object-fit: cover;
            border-radius: 25px;
            transition: .4s;
        }

        .gallery-card {
            overflow: hidden;
            border-radius: 25px;
            height: 260px;
        }

        .gallery-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: .4s;
        }

        .gallery-card:hover img {
            transform: scale(1.08);
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .contact-box {
            background: white;
            border-radius: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, .1);
        }

        footer {
            margin-top: 80px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold fs-4 text-primary">
                💧 GalonKu
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
        <div class="container" data-aos="zoom-in">
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold">
                    Air Bersih
                    <br>
                    Mudah Sampai Rumah
                </h1>
                <a href="/admin" class="btn btn-custom mt-3">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- TENTANG -->
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <h2 class="title display-5 mt-3 mb-4">
                        Tentang
                        <span class="text-primary">
                            GalonKu 💧
                        </span>
                    </h2>
                    <p class="text-secondary fs-5">
                        GalonKu adalah layanan air minum isi ulang yang
                        menyediakan air bersih, aman, higienis, dan berkualitas
                        untuk kebutuhan keluarga setiap hari.
                    </p>
                    <p class="text-secondary fs-5">
                        Dengan sistem pemesanan digital dan layanan pengantaran
                        cepat, kami hadir memberikan kemudahan mendapatkan air
                        galon tanpa harus keluar rumah.
                    </p>

                    <!-- FITUR -->
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle p-3 me-3">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">
                                        Kualitas Terjamin
                                    </h6>
                                    <small class="text-secondary">
                                        Diproses dengan standar kebersihan terbaik.
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex align-items-start">
                                <div class="bg-primary text-white rounded-circle p-3 me-3">
                                    <i class="bi bi-truck"></i>
                                </div>
                                <div>
                                    <h6 class="fw-bold">
                                        Layanan Cepat
                                    </h6>
                                    <small class="text-secondary">
                                        Pengantaran galon cepat sampai rumah.
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- STATISTIK -->
                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="bg-white shadow rounded-4 p-4 text-center">
                                <h2 class="text-primary fw-bold">
                                    10K+
                                </h2>
                                <b>
                                    Pelanggan Puas
                                </b>
                                <p class="small text-secondary mb-0">
                                    Dipercaya banyak pelanggan
                                </p>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="bg-white shadow rounded-4 p-4 text-center">
                                <h2 class="text-primary fw-bold">
                                    50K+
                                </h2>
                                <b>
                                    Galon Terjual
                                </b>
                                <p class="small text-secondary mb-0">
                                    Siap memenuhi kebutuhan air
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- IMAGE -->
                <div class="col-lg-6" data-aos="fade-left">
                    <img src="https://pabrikgalon.com/wp-content/uploads/2025/10/stok-gudang-pabrik-galon-kosong-siap-kirim.webp"
                        class="img-fluid rounded-5 shadow" style="height:600px; width:100%; object-fit:cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan" class="py-5">
        <div class="container">
            <div class="card border-0 shadow rounded-5 p-5" data-aos="fade-up">
                <div class="text-center mb-5">
                    <span class="text-primary fw-bold">
                        💧 LAYANAN KAMI
                    </span>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="card service-card text-center shadow-sm p-4 h-100">
                            <div class="icon-box mx-auto mb-4">
                                <i class="bi bi-cart-check"></i>
                            </div>
                            <h4 class="fw-bold">
                                Pesan Galon
                            </h4>
                            <p class="text-secondary">
                                Pesan galon dengan mudah melalui
                                sistem online tanpa harus datang langsung.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card service-card text-center shadow-sm p-4 h-100">
                            <div class="icon-box mx-auto mb-4">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h4 class="fw-bold">
                                Antar Cepat
                            </h4>
                            <p class="text-secondary">
                                Layanan pengiriman cepat dan tepat
                                sampai ke lokasi pelanggan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card service-card text-center shadow-sm p-4 h-100">
                            <div class="icon-box mx-auto mb-4">
                                <i class="bi bi-droplet-fill"></i>
                            </div>
                            <h4 class="fw-bold">
                                Air Berkualitas
                            </h4>
                            <p class="text-secondary">
                                Air bersih, higienis, dan aman
                                untuk kebutuhan keluarga.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="card border-0 shadow rounded-5 p-5" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2 class="title display-5 mt-3">
                        Gallery
                        <span class="text-primary">
                            GalonKu 💧
                        </span>
                    </h2>
                </div>

                <div class="row g-4 gallery">
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ7vLjIfSJ24PAL0_pI21B9xI7tDbYxMmMQA&s"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://pabrikgalon.com/wp-content/uploads/2025/09/galon-pet-akino-untuk-bisnis-depot-air-isi-ulang.webp"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRijgJBygC-ydTww_A8oniGBNdMPUFjdmPpLQ"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://img.antarafoto.com/cache/1200x798/2013/06/20/pabrik-baru-aqua-6uet-dom.jpg"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://rricoid-assets.obs.ap-southeast-4.myhuaweicloud.com/berita/Jakarta/o/1723092545520-DDK01764-EDIT/cdjwsmf6jpqzxef.jpeg"
                                class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="gallery-card shadow-sm">
                            <img src="https://id.cnpalletplastic.com/Content/upload/201858119/201808011851532455628.jpg"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KONTAK -->
    <section id="kontak" class="py-5">
        <div class="container">
            <div class="card border-0 shadow rounded-5 p-5" data-aos="fade-up">
                <div class="text-center mb-5">
                    <h2 class="title display-5 mt-3">
                        Kontak
                        <span class="text-primary">
                            GalonKu 💧
                        </span>
                    </h2>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <h5>
                            <i class="bi bi-geo-alt text-primary"></i>
                            Alamat
                        </h5>

                        <p>
                            Jl. Soekarno Hatta No.456 Bandung
                        </p>

                        <h5>
                            <i class="bi bi-envelope text-primary"></i>
                            Email
                        </h5>

                        <p>
                            info@galonku.com
                        </p>
                        <h5>
                            <i class="bi bi-telephone text-primary"></i>
                            Telepon
                        </h5>
                        <p>
                            0812-3456-7890
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <iframe src="https://www.google.com/maps?q=Bandung&output=embed" width="100%"
                            height="350" style="border:0;border-radius:20px">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-4">
        <span class="text-secondary">
            © 2026 GalonKu Barudak LPKIA
        </span>
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
