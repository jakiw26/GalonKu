@extends('layout.admin')

@section('content')

    <head>
        <base href="./">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
        <meta name="author" content="Łukasz Holeczek">
        <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
        <title>CoreUI Free Bootstrap Admin Template</title>
        <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Vendors styles-->
        <link rel="stylesheet" href="{{ asset('template/vendors/simplebar/css/simplebar.css') }}">
        <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
        <!-- Main styles for this application-->
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
        <!-- We use those styles to show code examples, you should remove them in your application.-->
        <link rel="stylesheet" href="{{ asset('template/css/examples.css') }}">
        {{-- <script src="js/config.js"></script>
        <script src="js/color-modes.js"></script> --}}
        <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('template/vendors/@coreui/chartjs/css/coreui-chartjs.css') }}">
        <link rel="stylesheet" href="{{ asset('template/vendors/@coreui/coreio/js/coreui.bundle.min.js') }}">
    </head>

    <body>
    
    <div class="wrapper d-flex flex-column min-vh-100">
      <header class="header header-sticky p-0 mb-4">
        <div class="container-fluid border-bottom px-4">
          <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px">
            <svg class="icon icon-lg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path fill="var(--ci-primary-color, currentcolor)" d="M80 96h352v32H80zm0 144h352v32H80zm0 144h352v32H80z" class="ci-primary" />
            </svg>
          </button>
          <ul class="header-nav">
            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button" aria-expanded="false" data-coreui-toggle="dropdown">
                <svg class="icon icon-lg theme-icon-active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                </svg>
              </button>
              <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem">
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="light">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 104c-83.813 0-152 68.187-152 152s68.187 152 152 152 152-68.187 152-152-68.187-152-152-152m0 272a120 120 0 1 1 120-120 120.136 120.136 0 0 1-120 120M240 16h32v48h-32zm0 432h32v48h-32zm208-208h48v32h-48zm-432 0h48v32H16zm372.687 171.314 22.627-22.627 32 32-22.627 22.627zm-320-320 22.628-22.628 32 32-22.628 22.628zm-.002 329.375 32-32 22.628 22.626-32 32zm320.002-320.003 32-32 22.628 22.628-32 32z" class="ci-primary" />
                    </svg>
                    Light
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center" type="button" data-coreui-theme-value="dark">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M268.279 496c-67.574 0-130.978-26.191-178.534-73.745S16 311.293 16 243.718A252.25 252.25 0 0 1 154.183 18.676a24.44 24.44 0 0 1 34.46 28.958 220.12 220.12 0 0 0 54.8 220.923A218.75 218.75 0 0 0 399.085 333.2a220.2 220.2 0 0 0 65.277-9.846 24.439 24.439 0 0 1 28.959 34.461A252.26 252.26 0 0 1 268.279 496M153.31 55.781A219.3 219.3 0 0 0 48 243.718C48 365.181 146.816 464 268.279 464a219.3 219.3 0 0 0 187.938-105.31 253 253 0 0 1-57.13 6.513 250.54 250.54 0 0 1-178.268-74.016 252.15 252.15 0 0 1-67.509-235.4Z" class="ci-primary" />
                    </svg>
                    Dark
                  </button>
                </li>
                <li>
                  <button class="dropdown-item d-flex align-items-center active" type="button" data-coreui-theme-value="auto">
                    <svg class="icon icon-lg me-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M256 16C123.452 16 16 123.452 16 256s107.452 240 240 240 240-107.452 240-240S388.548 16 256 16m-22 446.849a208.35 208.35 0 0 1-169.667-125.9c-.364-.859-.706-1.724-1.057-2.587L234 429.939Zm0-69.582L50.889 290.76A210 210 0 0 1 48 256q0-9.912.922-19.67L234 339.939Zm0-90L54.819 202.96a206 206 0 0 1 9.514-27.913Q67.1 168.5 70.3 162.191L234 253.934Zm0-86.015L86.914 134.819a209.4 209.4 0 0 1 22.008-25.9q3.72-3.72 7.6-7.228L234 166.027Zm0-87.708-89.648-49.093A206.95 206.95 0 0 1 234 49.151ZM464 256a207.775 207.775 0 0 1-198 207.761V48.239A207.79 207.79 0 0 1 464 256" class="ci-primary" />
                    </svg>
                    Auto
                  </button>
                </li>
              </ul>
            </li>

            <li class="nav-item py-1">
              <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md">
            <img class="avatar-img" src="{{ asset('template/assets/img/avatars/8.jpg') }}" alt="user@email.com">
            </div>
                </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-body-tertiary text-body-secondary fw-semibold rounded-top mb-2">Account</div>
                <a class="dropdown-item" href="/admin/profile">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="m411.6 343.656-72.823-47.334 27.455-50.334A80.2 80.2 0 0 0 376 207.681V128a112 112 0 0 0-224 0v79.681a80.24 80.24 0 0 0 9.768 38.308l27.455 50.333-72.823 47.334A79.72 79.72 0 0 0 80 410.732V496h368v-85.268a79.73 79.73 0 0 0-36.4-67.076M416 464H112v-53.268a47.84 47.84 0 0 1 21.841-40.246l97.66-63.479-41.64-76.341A48.15 48.15 0 0 1 184 207.681V128a80 80 0 0 1 160 0v79.681a48.15 48.15 0 0 1-5.861 22.985L296.5 307.007l97.662 63.479A47.84 47.84 0 0 1 416 410.732Z" class="ci-primary" />
                  </svg>
                  Profile
                </a>
                <a class="dropdown-item" href="/authentication/login.html">
                  <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="var(--ci-primary-color, currentcolor)" d="M77.155 272.034H351.75v-32.001H77.155l75.053-75.053v-.001l-22.628-22.626-113.681 113.68.001.001h-.001L129.58 369.715l22.628-22.627v-.001z" class="ci-primary" />
                    <path fill="var(--ci-primary-color, currentcolor)" d="M160 16v32h304v416H160v32h336V16z" class="ci-primary" />
                  </svg>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div class="container-fluid px-4">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active"><span>Dashboard</span></li>
            </ol>
          </nav>
        </div>
      </header>
      <div class="body flex-grow-1">
        <div class="container-lg px-4">
          <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-primary">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">
                      26K
                      <span class="fs-6 fw-normal">
                        (-12.4%
                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="var(--ci-primary-color, currentcolor)" d="m367.997 338.75-95.998 95.997V17.503h-32v417.242l-95.996-95.995-22.627 22.627L256 496l134.624-134.623z" class="ci-primary" />
                        </svg>
                        )
                      </span>
                    </div>
                    <div>Users</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)" d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                  <canvas class="chart" id="card-chart1" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-info">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">
                      $6.200
                      <span class="fs-6 fw-normal">
                        (40.9%
                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="var(--ci-primary-color, currentcolor)" d="M390.624 150.625 256 16 121.376 150.625l22.628 22.627 95.997-95.998v417.982h32V77.257l95.995 95.995z" class="ci-primary" />
                        </svg>
                        )
                      </span>
                    </div>
                    <div>Income</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)" d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                  <canvas class="chart" id="card-chart2" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-warning">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">
                      2.49%
                      <span class="fs-6 fw-normal">
                        (84.7%
                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="var(--ci-primary-color, currentcolor)" d="M390.624 150.625 256 16 121.376 150.625l22.628 22.627 95.997-95.998v417.982h32V77.257l95.995 95.995z" class="ci-primary" />
                        </svg>
                        )
                      </span>
                    </div>
                    <div>Conversion Rate</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)" d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3" style="height: 70px">
                  <canvas class="chart" id="card-chart3" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
            <div class="col-sm-6 col-xl-3">
              <div class="card text-white bg-danger">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                  <div>
                    <div class="fs-4 fw-semibold">
                      44K
                      <span class="fs-6 fw-normal">
                        (-23.6%
                        <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                          <path fill="var(--ci-primary-color, currentcolor)" d="m367.997 338.75-95.998 95.997V17.503h-32v417.242l-95.996-95.995-22.627 22.627L256 496l134.624-134.623z" class="ci-primary" />
                        </svg>
                        )
                      </span>
                    </div>
                    <div>Sessions</div>
                  </div>
                  <div class="dropdown">
                    <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <svg class="icon me-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="var(--ci-primary-color, currentcolor)" d="M256 144a64 64 0 1 0-64-64 64.07 64.07 0 0 0 64 64m0-96a32 32 0 1 1-32 32 32.036 32.036 0 0 1 32-32m0 320a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32m0-272a64 64 0 1 0 64 64 64.07 64.07 0 0 0-64-64m0 96a32 32 0 1 1 32-32 32.036 32.036 0 0 1-32 32" class="ci-primary" />
                      </svg>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </div>
                <div class="c-chart-wrapper mt-3 mx-3" style="height: 70px">
                  <canvas class="chart" id="card-chart4" height="70"></canvas>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
          <div class="card mb-4">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <div>
                  <h4 class="card-title mb-0">Traffic</h4>
                  <div class="small text-body-secondary">October 2025 - April 2026</div>
                </div>
                <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                  <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                    <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off">
                    <label class="btn btn-outline-secondary">Day</label>
                    <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off" checked="">
                    <label class="btn btn-outline-secondary active">Month</label>
                    <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off">
                    <label class="btn btn-outline-secondary">Year</label>
                  </div>
                  <button class="btn btn-primary" type="button">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                      <path fill="var(--ci-primary-color, currentcolor)" d="M272 434.744V209.176h-32v225.568l-51.882-51.882-22.628 22.627L256 496l90.51-90.511-22.628-22.627z" class="ci-primary" />
                      <path fill="var(--ci-primary-color, currentcolor)" d="M400 161.176c0-79.4-64.6-144-144-144s-144 64.6-144 144a96 96 0 0 0 0 192h80v-32h-80a64 64 0 0 1 0-128h32v-32a112 112 0 0 1 224 0v32h32a64 64 0 0 1 0 128h-80v32h80a96 96 0 0 0 0-192" class="ci-primary" />
                    </svg>
                  </button>
                </div>
              </div>
              <div class="c-chart-wrapper" style="height: 300px; margin-top: 40px">
                <canvas class="chart" id="main-chart" height="300"></canvas>
              </div>
            </div>
            <div class="card-footer">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xl-5 g-4 mb-2 text-center">
                <div class="col">
                  <div class="text-body-secondary">Visits</div>
                  <div class="fw-semibold text-truncate">29.703 Users (40%)</div>
                  <div class="progress progress-thin mt-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="text-body-secondary">Unique</div>
                  <div class="fw-semibold text-truncate">24.093 Users (20%)</div>
                  <div class="progress progress-thin mt-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="text-body-secondary">Pageviews</div>
                  <div class="fw-semibold text-truncate">78.706 Views (60%)</div>
                  <div class="progress progress-thin mt-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col">
                  <div class="text-body-secondary">New Users</div>
                  <div class="fw-semibold text-truncate">22.123 Users (80%)</div>
                  <div class="progress progress-thin mt-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
                <div class="col d-none d-xl-block">
                  <div class="text-body-secondary">Bounce Rate</div>
                  <div class="fw-semibold text-truncate">40.15%</div>
                  <div class="progress progress-thin mt-2">
                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer px-4">
        <div>
          <a href="https://coreui.io">CoreUI</a>
          <a href="https://coreui.io/product/free-bootstrap-admin-template/">Bootstrap Admin Template</a>
          &copy; 2026 creativeLabs.
        </div>
        <div class="ms-auto">
          Powered by&nbsp;
          <a href="https://coreui.io/bootstrap/docs/">CoreUI UI Components</a>
        </div>
      </footer>
    </div>
        <!-- CoreUI and necessary plugins-->
        <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>
        <script src="{{ asset('template/vendors/simplebar/js/simplebar.min.js') }}"></script>
        <script>
            const header = document.querySelector("header.header");

            document.addEventListener("scroll", () => {
                if (header) {
                    header.classList.toggle("shadow-sm", document.documentElement.scrollTop > 0);
                }
            });
        </script>
        <!-- Plugins and scripts required by this view-->
        <script src="{{ asset('template/vendors/js/vendor.bundle.base.js') }}"></script>

        <script src="{{ asset('template/vendors/chart.js/js/chart.umd.js') }}"></script>
        <script src="{{ asset('template/vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
        <script src="{{ asset('template/vendors/@coreui/utils/js/index.js') }}"></script>

        <script src="{{ asset('template/js/coreui.bundle.min.js') }}"></script>
        <script src="{{ asset('template/js/main.js') }}"></script>
    </body>
@endsection
