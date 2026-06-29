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
                <svg role="img" aria-label="CoreUI Logo Full" class="sidebar-brand-full" width="88"
                    height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 312 115">
                    <g style="fill: currentColor">
                        <path
                            d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
                        <path
                            d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
                        <g transform="translate(118 33)">
                            <path
                                d="M50.745.428c-8.28.01-14.99 6.72-15 15v17.277c0 8.285 6.715 15 15 15 8.284 0 15-6.715 15-15V15.428c-.01-8.28-6.72-14.99-15-15Zm7 32.277a7 7 0 0 1-14 0V15.428a7 7 0 0 1 14 0v17.277ZM14.079 8.488a7.01 7.01 0 0 1 7.868 6.075.99.99 0 0 0 .984.865h6.03a1.01 1.01 0 0 0 1-1.097C29.354 6.206 22.38.046 14.243.447 6.161 1-.086 7.762 0 15.864V32.27c-.087 8.101 6.161 14.864 14.244 15.416 8.137.401 15.11-5.759 15.716-13.883a1.01 1.01 0 0 0-.999-1.098h-6.03a.99.99 0 0 0-.985.865 7.01 7.01 0 0 1-7.868 6.076A7.164 7.164 0 0 1 8 32.461V15.672a7.164 7.164 0 0 1 6.079-7.184ZM96.922 27.994a12.158 12.158 0 0 0 7.184-11.077v-3.7c0-6.71-5.44-12.15-12.149-12.15H75a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-17h6.621l7.916 17.413a1 1 0 0 0 .91.587h6.591a1 1 0 0 0 .91-1.414l-8.026-17.659Zm-.816-11.077a4.154 4.154 0 0 1-4.148 4.15h-9.852v-12h9.852a4.154 4.154 0 0 1 4.148 4.15v3.7ZM139 1.067h-26a1 1 0 0 0-1 1v44a1 1 0 0 0 1 1h26a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-19v-12h13a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1h-13v-10h19a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1ZM177 1.067h-6a1 1 0 0 0-1 1v22.647a7.007 7.007 0 1 1-14 0V2.067a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v22.647a15.003 15.003 0 1 0 30 0V2.067a1 1 0 0 0-1-1Z" />
                            <rect width="8" height="38" x="186" y="1.067" rx="1" />
                        </g>
                    </g>
                </svg>
                <svg role="img" aria-label="CoreUI Logo Signet" class="sidebar-brand-narrow" width="88"
                    height="32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 0 102 115">
                    <g style="fill: currentColor">
                        <path
                            d="M96 24.124 57 1.608a12 12 0 0 0-12 0L6 24.124a12.034 12.034 0 0 0-6 10.393V79.55a12.033 12.033 0 0 0 6 10.392l39 22.517a12 12 0 0 0 12 0l39-22.517a12.033 12.033 0 0 0 6-10.392V34.517a12.034 12.034 0 0 0-6-10.393ZM94 79.55a4 4 0 0 1-2 3.464l-39 22.517a4 4 0 0 1-4 0L10 83.014a4 4 0 0 1-2-3.464V34.517a4 4 0 0 1 2-3.464L49 8.536a4 4 0 0 1 4 0l39 22.517a4 4 0 0 1 2 3.464V79.55Z" />
                        <path
                            d="M74.022 70.071h-2.866a4 4 0 0 0-1.925.494L51.95 80.05 32 68.531V45.554l19.95-11.519 17.29 9.455a4 4 0 0 0 1.919.49h2.863a2 2 0 0 0 2-2v-2.71a2 2 0 0 0-1.04-1.756L55.793 27.02a8.04 8.04 0 0 0-7.843.09L28 38.626a8.025 8.025 0 0 0-4 6.929V68.53a8 8 0 0 0 4 6.928l19.95 11.519a8.043 8.043 0 0 0 7.843.088l19.19-10.532a2 2 0 0 0 1.038-1.753v-2.71a2 2 0 0 0-2-2Z" />
                    </g>
                </svg>
            </div>
            <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close"
                onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"></button>
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
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
                <a class="nav-link" href="users.html">
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
                        <a class="nav-link" href="components/accordion.html">
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

</body>

</html>
