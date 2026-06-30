<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin GalonKu')</title>

    <link rel="stylesheet" href="{{ asset('template/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
        <div class="sidebar-header border-bottom">
            <div class="sidebar-brand me-auto">
                <img src="{{ asset('template/assets/img/logogalon.png') }}" alt="Logo GalonKu" width="65"
                    height="55" style="margin-right: -15px;"></img>
                <span class="sidebar-brand-full fw-semibold">
                    GalonKu
                </span>
            </div>
            <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
            <li class="nav-item">
                <a class="nav-link" href="/admin/dashboard">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M425.706 142.294A240 240 0 0 0 16 312v88h144v-32H48v-56c0-114.691 93.309-208 208-208s208 93.309 208 208v56H352v32h144v-88a238.43 238.43 0 0 0-70.294-169.706"
                            class="ci-primary" />
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M80 264h32v32H80zm160-136h32v32h-32zm-104 40h32v32h-32zm264 96h32v32h-32zm-102.778 71.1 69.2-144.173-28.85-13.848-69.183 144.135a64.141 64.141 0 1 0 28.833 13.886M256 416a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32"
                            class="ci-primary" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="nav-title">UI Elements</li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/user">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M256 256a112 112 0 1 0-112-112 112 112 0 0 0 112 112zm0 32c-92.64 0-168 75.36-168 168a24 24 0 0 0 48 0c0-66.17 53.83-120 120-120s120 53.83 120 120a24 24 0 0 0 48 0c0-92.64-75.36-168-168-168z" />
                    </svg>
                    Users
                </a>
            </li>

            <li class="nav-group">
                <a class="nav-link nav-group-toggle" href="#">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M96 64h320v48H96zM96 176h320v48H96zM96 288h320v48H96zM96 400h200v48H96z" />
                    </svg>
                    Detail Produk
                </a>
                <ul class="nav-group-items compact">
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/produk">
                            <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <i class="bi bi-box-seam nav-icon"></i>
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/alerts.html">
                            <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <i class="bi bi-cart-check-fill nav-icon"></i>
                            Pesanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="components/badge.html">
                            <span class="nav-icon"><span class="nav-icon-bullet"></span></span>
                            <i class="bi bi-receipt-cutoff nav-icon"></i>
                            Detail Pesanan
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pembayaran.html">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M464 96H48C21.49 96 0 117.49 0 144v224c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V144c0-26.51-21.49-48-48-48zm-16 256H64V160h384v192zM256 176c-44.18 0-80 35.82-80 80s35.82 80 80 80 80-35.82 80-80-35.82-80-80-80zm0 128c-26.47 0-48-21.53-48-48s21.53-48 48-48 48 21.53 48 48-21.53 48-48 48z" />
                    </svg>
                    Pembayaran
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pengiriman.html">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M48 80C21.49 80 0 101.49 0 128v224c0 26.51 21.49 48 48 48h16a80 80 0 0 0 160 0h64a80 80 0 0 0 160 0h16c26.51 0 48-21.49 48-48V208c0-26.51-21.49-48-48-48h-80V128c0-26.51-21.49-48-48-48H48zm288 96h80v64h-80v-64zM160 352a48 48 0 1 1 48-48 48 48 0 0 1-48 48zm224 0a48 48 0 1 1 48-48 48 48 0 0 1-48 48z" />
                    </svg>
                    Pengiriman
                </a>
            </li>


            <li class="nav-divider"></li>
            <li class="nav-title">Extras</li>

            <li class="nav-item">
                <a class="nav-link" href="laporan.html">
                    <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)"
                            d="M128 448V240h64v208h-64zm96 0V128h64v320h-64zm96 0V304h64v144h-64zM96 464h320v32H96z" />
                    </svg>
                    Laporan
                </a>
            </li>

        </ul>
        <div class="sidebar-footer border-top d-none d-md-flex">
            <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
        </div>
    </div>
    @yield('content')
    <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('template/js/coreui.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@coreui/coreui@5.0.0/dist/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('template/js/coreui.bundle.min.js') }}"></script>

    <script>
        const storedTheme = localStorage.getItem('coreui-theme');

        const getPreferredTheme = () => {
            if (storedTheme) {
                return storedTheme;
            }

            return window.matchMedia('(prefers-color-scheme: dark)').matches ?
                'dark' :
                'light';
        }

        const setTheme = theme => {
            document.documentElement.setAttribute('data-coreui-theme', theme);
            localStorage.setItem('coreui-theme', theme);
        }
        setTheme(getPreferredTheme());


        document.querySelectorAll('[data-coreui-theme-value]')
            .forEach(function(button) {
                button.addEventListener('click', function() {
                    const theme = this.getAttribute('data-coreui-theme-value');
                    setTheme(theme);
                    document.querySelectorAll('[data-coreui-theme-value]')
                        .forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });

            });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function() {

                    let form = this.closest('form');

                    Swal.fire({
                        title: "Yakin mau hapus?",
                        text: "Data user akan dihapus permanen!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#6c757d",
                        confirmButtonText: "Ya, hapus!",
                        cancelButtonText: "Batal"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });

                });
            });

        });
    </script>

</body>

</html>
