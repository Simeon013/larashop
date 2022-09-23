<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>
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


@yield('content');


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
<script src="backoffice/js/dashboard.js"></script>
<!-- End custom js for this page-->
</body>

</html>
