<!DOCTYPE html>

<!-- =========================================================
  + Develp by mahir technology indonesia
=========================================================
-->

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="/template/assets/" data-template="vertical-menu-template-free">

<head>
  @include('user.includes.head')
  @include('user.includes.style')
  @stack('addon-style')
</head>

<body>

  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      @include('user.includes.sidebar-detail')
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        {{-- @include('user.includes.navbar') --}}
        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">@yield('title') /</span> @yield('subtitle')
            </h4>
            @yield('content')
          </div>
          <!-- / Content -->

          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

  </div>
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- / Layout wrapper -->

  @include('user.includes.scripts')
  @stack('addon-script')

</body>

</html>
