<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="backoffice/css/themify-icons.css">
  <link rel="stylesheet" href="backoffice/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="backoffice/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="backoffice/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="backoffice/images/logo_2H_tech.png" />
</head>
<body>
  <div class="container-scroller">


    @include('include.nav1')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->

    @include('include.nav2')

          <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        {{-- <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
        </footer> --}}
        <!-- partial -->
      </div>
      <!-- main-panel ends -->


</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="backoffice/js/vendor.bundle.base.js"></script>
<script src="backoffice/js/vendor.bundle.addons.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="backoffice/js/off-canvas.js"></script>
<script src="backoffice/js/hoverable-collapse.js"></script>
<script src="backoffice/js/template.js"></script>
<script src="backoffice/js/settings.js"></script>
<script src="backoffice/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
    @yield('scripts')
<!-- End custom js for this page-->
</body>

</html>
