<?php
    include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="dbstyle/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="dbstyle/assets/img/favicon.png">
  <title>
    NU Fashion | Register
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="dbstyle/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="dbstyle/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="dbstyle/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="dbstyle/assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Add New User!</h1>
          </div>
          <a href="dashboard.php" class="text-center text-white text-decoration-underline">Back to Dashboard</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4 pb-0">
              <h2>Register</h2>
            </div>
            <div class="card-body">
              <form role="form" method="post">
                <div class="mb-3">
                  <input type="text" name="username" class="form-control" placeholder="username" required>
                </div>
                <div class="mb-3">
                <select name="gender" class="form-select">
                    <option value="female" selected>Female</option>
                    <option value="male">Male</option>
                </select>
                </div>
                
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="example@gmail.com" required>
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control" placeholder="......." required>
                </div>
                <div class="mb-3">
                <input type="text" name="address" class="form-control" placeholder="Phnom Penh">
                </div>
                <div class="text-center">
                    <input type="submit" name="btn-register" value="Submit" class="btn bg-gradient-dark w-100 my-4 mb-2">
                </div>
                <p class="text-sm mt-3 mb-0">Already have an account? <a href="Login.php" class="text-dark font-weight-bolder">Sign in</a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="dbstyle/assets/js/core/popper.min.js"></script>
  <script src="dbstyle/assets/js/core/bootstrap.min.js"></script>
  <script src="dbstyle/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="dbstyle/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="dbstyle/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>
<?php
    if(isset($_POST['btn-register'])){
        $name       = $_POST['username'];
        $gender     = $_POST['gender'];
        $email      = $_POST['email'];
        $password   = $_POST['password'];
        $address    = $_POST['address'];

        $register_sql = "INSERT INTO `tb_register`(`username`, `gender`, `email`, `password`, `address`) 
        VALUES ('$name','$gender','$email','$password','$address')";

        $result       = $connect->query($register_sql);
        if($result){
            echo "<script> location.href='dashboard.php'; </script>";
        }
        else{
            echo "fail";
        }
    }
?>