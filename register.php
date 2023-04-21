<!DOCTYPE html>
<html lang="en">
  <?php include("user_session.php"); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CPSU TREE CUTTING SERVICES</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Uploads/images/cutting-icon.png" rel="icon">
  <link href="Uploads/images/cutting-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="Admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="Admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Admin/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center ">
                  <img src="Uploads/images/cutting-tree-logo1.png" style="width: 80%; heigth: 300px;" alt="">
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>			

                  <form class="row g-3 needs-validation" action="register_sub.php" method="POST" enctype="multipart/form-data" novalidate>

                    <div class="col-12">
                      <div class="form-floating ">
                        <input type="text" name="fname"  class="form-control" id="floatingInput" placeholder="First Name" autocomplete="Off" required>
                        <label for="floatingInput">First Name</label>
                        <div class="invalid-feedback">Please, enter your First Name!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating ">
                        <input type="text" name="lname" class="form-control" id="floatingInput" placeholder="Last Name" autocomplete="Off" required>
                        <label for="floatingInput">Last name</label>
                        <div class="invalid-feedback">Please, enter your First Name!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <select name="gender" class="form-select" id="validationDefault04" required="">
                        <option selected="" disabled="" value="">Select Gender</option>
                        <option>Male</option>
                        <option>Gender</option>
                      </select>
                      <div class="invalid-feedback">Please, Select your Gender!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating ">
                        <input type="number" name="contact" class="form-control" id="floatingInput" placeholder="Contact Number" autocomplete="Off" required>
                        <label for="floatingInput">Contact Number</label>
                        <div class="invalid-feedback">Please, enter your Contact Number!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating ">
                        <input type="text" name="address" class="form-control" id="floatingInput" placeholder="Address" autocomplete="Off" required>
                        <label for="floatingInput">Address</label>
                        <div class="invalid-feedback">Please, enter your Address!</div>
                      </div>
                    </div>
                   
                    <div class="col-12">
                      <div class="form-floating ">
                        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Adress" autocomplete="Off" required>
                        <label for="floatingInput">Email</label>
                        <div class="invalid-feedback">Please, enter a valid Email Address!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-floating ">
                        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Password" autocomplete="Off" required>
                        <label for="floatingInput">Password</label>
                        <div class="invalid-feedback">Please, enter your Password!</div>
                      </div>
                    </div>
                  
                    <div class="col-12">
                      <label for="Profile" class="form-label">Profile</label>
                      <input type="file" name="file1" class="form-control" id="profile" autocomplete="Off" required>
                      <div class="invalid-feedback">Please, Select Profile!</div>
                    </div>

                    <div class="col-12">
                      <label for="id" class="form-label"><p>For verification purposes, kindly attach your back-to-back ID photo in PDF format.</p></label>
                      <input type="file" name="file2" accept="application/pdf, application/vnd.ms-excel" class="form-control" id="ID" autocomplete="Off" required>
                      <div class="invalid-feedback">Please, attach your back-to-back ID!</div>
                    </div>
                  
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="Admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Admin/assets/vendor/chart.js/chart.min.js"></script>
  <script src="Admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="Admin/assets/vendor/quill/quill.min.js"></script>
  <script src="Admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="Admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Admin/assets/js/main.js"></script>

</body>

</html>