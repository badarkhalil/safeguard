<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Wieldy - A fully responsive, HTML5 based admin template">
  <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, jQuery, web design, CSS3, sass">
  <!-- /meta tags -->
  <title>Safeguard - Admin Dashboard</title>

  <!-- Site favicon -->
  <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.ico') }}" type="image/x-icon">
  <!-- /site favicon -->

  <!-- Font Icon Styles -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/vendors/gaxon-icon/style.css') }}">
  <!-- /font icon Styles -->

  <!-- Perfect Scrollbar stylesheet -->
  <link rel="stylesheet" href="{{ asset('admin/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}">
  <!-- /perfect scrollbar stylesheet -->

  <!-- Load Styles -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/lite-style-1.min.css') }}">
  <!-- /load styles -->

</head>
<body class="dt-sidebar--fixed dt-header--fixed">

<!-- Loader -->
<div class="dt-loader-container">
  <div class="dt-loader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"></circle>
    </svg>
  </div>
</div>
<!-- /loader -->

<!-- Root -->
<div class="dt-root">

@include('Admin.layouts.header')

  <!-- Site Main -->
  <main class="dt-main">


    @include('Admin.layouts.sidebar')

    @yield("content")


      <!-- Customizer Sidebar -->
      <aside class="dt-customizer dt-drawer position-right">
        <div class="dt-customizer__inner">

          <!-- Customizer Header -->
          <div class="dt-customizer__header">

            <!-- Customizer Title -->
            <div class="dt-customizer__title">
              <h3 class="mb-0">Theme Settings</h3>
            </div>
            <!-- /customizer title -->

            <!-- Close Button -->
            <button type="button" class="close" data-toggle="customizer">
              <span aria-hidden="true">&times;</span>
            </button>
            <!-- /close button -->

          </div>
          <!-- /customizer header -->

          <!-- Customizer Body -->
          <div class="dt-customizer__body ps-custom-scrollbar">
            <!-- Customizer Body Inner  -->
            <div class="dt-customizer__body-inner">

              <!-- Section -->
              <section id="theme-chooser">
                <h6 class="text-uppercase">Theme</h6>

                <!-- Button Group -->
                <div class="dt-customizer__btn-group btn-group btn-group-toggle btn-group mb-1" data-toggle="buttons">                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-lite" value="lite">Lite</label>                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-semidark" value="semidark">Semi Dark</label>                <label class="btn btn-outline-light"><input class="theme-option" type="radio" name="options" id="theme-option-dark" value="dark">Dark</label>            </div>
                <!-- /button group -->

              </section>
              <!-- /section -->

              <!-- Section -->
              <section id="theme-style-chooser">
                <h6 class="text-uppercase">Colors</h6>

                <!-- List -->
                <ul class="dt-list dt-list-sm dt-color-options">
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-1"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-2"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-3"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-4"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-5"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-6"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-7"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-8"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-9"></span>
                  </li>
                  <li class="dt-list__item">
                    <span class="dt-color-option" data-style="style-10"></span>
                  </li>
                </ul>
                <!-- /list -->

              </section>
              <!-- /section -->

              <!-- Section -->
              <section>
                <h6 class="text-uppercase">Nav Style</h6>

                <!-- List -->
                <ul class="dt-list">
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/default" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/fixed.png" alt="Fixed Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/mini-sidebar" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/mini-sidebar.png" alt="Mini Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/drawer" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/drawer-nav.png" alt="Drawer Nav Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/back-office-mini" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/no-header-mini-sidebar.png" alt="No Header Mini Sidebar Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/back-office" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/vertical-no-header.png" alt="Vertical No Header Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/horizontal" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/horizontal-default.png"
                             alt="Horizontal Default Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/horizontal-dark" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/horizontal-dark.png" alt="Horizontal Dark Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/horizontal-inside-nav" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/horizontal-inside-nav.png" alt="Horizontal Inside Nav Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/horizontal-bottom-nav" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/horizontal-bottom-nav.png" alt="Horizontal Bottom Nav Layout">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="http://wieldy.g-axon.work/html-bs4/horizontal-top-nav" target="_blank" class="choose-option__icon">
                        <img src="assets/images/layouts/horizontal-top-nav.png" alt="Horizontal Top Nav Layout">
                      </a>
                    </div>
                  </li>
                </ul>
                <!-- /list -->

              </section>
              <!-- /section -->

              <!-- Section -->
              <section  id="layout-chooser">
                <h6 class="text-uppercase">Layout</h6>

                <!-- List -->
                <ul class="dt-list dt-list-sm">
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="javascript:void(0)" class="choose-option__icon" data-layout="framed">
                        <img src="assets/images/layouts/framed.png" alt="Framed">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="javascript:void(0)" class="choose-option__icon" data-layout="full-width">
                        <img src="assets/images/layouts/full-width.png" alt="Full Width">
                      </a>
                    </div>
                  </li>
                  <li class="dt-list__item">
                    <div class="choose-option">
                      <a href="javascript:void(0)" class="choose-option__icon" data-layout="boxed">
                        <img src="assets/images/layouts/boxed.png" alt="Boxed">
                      </a>
                    </div>
                  </li>
                </ul>
                <!-- /list -->

              </section>
              <!-- /section -->

            </div>
            <!-- /customizer body inner -->
          </div>
          <!-- /customizer body -->

        </div>
      </aside>
      <!-- /customizer sidebar -->

    </main>
  </div>
  <!-- /root -->

  <!-- Optional JavaScript -->
  <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/moment/moment.js') }}"></script>
  <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Perfect Scrollbar jQuery -->
  <script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
  <!-- /perfect scrollbar jQuery -->

  <!-- masonry script -->
  <script src="{{ asset('admin/node_modules/masonry-layout/dist/masonry.pkgd.min.js') }}"></script>
  <script src="{{ asset('admin/node_modules/sweetalert2/dist/sweetalert2.js') }}"></script>

  <script src="{{ asset('admin/node_modules/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/script.js') }}"></script>
  <script src="{{ asset('admin/assets/js/custom/charts/dashboard-crypto.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var openLi = document.querySelector('.dt-side-nav__item.open, .dt-side-nav__item .active');
      if (openLi) {
        document.getElementById('main-sidebar').scrollTop = openLi.offsetTop;
      }
    });
  </script>
  @yield('script')

  </body>
  </html>
