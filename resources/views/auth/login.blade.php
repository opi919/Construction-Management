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
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ url('/') }}/DashboardResources/images/logo.svg" alt="logo">
              </div>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <div>
              @error('email')
              <span class="text-danger">
                    <strong>{{ $message }}</strong>
              </span>
              @enderror
              <div>
              <div>
              @error('password')
              <span class="text-danger">
                    <strong>{{ $message }}</strong>
              </span>
              @enderror
              <div>
              <form class="pt-3" method="POST" action="{{ route('login') }}">
              @csrf  
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                </div>
                
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">SIGN IN</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" name="remember" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="{{ route('password.request') }}" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ url('/') }}/DashboardResources/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ url('/') }}/DashboardResources/js/off-canvas.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/hoverable-collapse.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/template.js"></script>
  <script src="{{ url('/') }}/DashboardResources/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
