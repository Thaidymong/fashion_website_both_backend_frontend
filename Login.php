<?php
include("connection.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
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
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Log In</h4>
                  <p class="mb-0">Enter your username and password to sign in</p>
                </div>
                <div class="card-body">
                  <form role="form" action="" method="post">
                    <div class="mb-3">
                      <input type="text" name="name" class="form-control form-control-lg" placeholder="username">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password">
                    </div>
                    <div class="text-center">
                      <input type="submit" value="Login" name="btn-login" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
  <script src="dbstyle/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>


<?php
session_start();
if (isset($_POST['btn-login'])) {
  $username   = $_POST['name'];
  $password   = $_POST['password'];

  $sql_list   = "SELECT * FROM `tb_register` WHERE username = '$username' AND password = '$password' ";
  $result     = $connect->query($sql_list);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $_SESSION['FullName'] = $row['username'];
      $_SESSION['Password'] = $row['password'];
      header("location: dashboard.php");
    }
  }
}
?>