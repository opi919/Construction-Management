<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RoyalUI Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ url('/') }}/DashboardResources/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="{{ url('/') }}/DashboardResources/vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ url('/') }}/DashboardResources/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ url('/') }}/DashboardResources/images/favicon.png" />
</head>
<body>
    <!-- partial:partials/_navbar.html -->
    @include('Dashboards.nav')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('Dashboards.AgentDash.layout.nav')
      <!-- partial -->
      <div class="main-panel">
        
        <div class="content-wrapper">

          <!-- eikhane amader code kora lagbe -->

          @yield('content')
        </div>
        <!-- content-wrapper ends -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="{{ url('/') }}/DashboardResources/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="{{ url('/') }}/DashboardResources/vendors/chart.js/Chart.min.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{ url('/') }}/DashboardResources/js/off-canvas.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/hoverable-collapse.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/template.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ url('/') }}/DashboardResources/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

