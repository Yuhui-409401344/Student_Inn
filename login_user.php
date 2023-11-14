<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>顧客登入帳號</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Serenity - v4.6.0
  * Template URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>


  <!-- ======= Header ======= -->
  <header id="header_in" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo" style="text-align: left;">
        <span><i class="fas fa-mail-bulk"></i>&nbsp;&nbsp;a29045537@gmail.com&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <span><i class="fas fa-phone"></i>&nbsp;&nbsp;02-2904-5537</span>

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <div style="padding-right: 0%;">
        <span><a href="index.php"><i class="fas fa-house-user"></i>&nbsp;&nbsp;<b>回首頁</b></a></span>&nbsp;&nbsp;&nbsp;&nbsp;
        <span><a href="https://www.facebook.com/%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8-%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97-109092651464386/" target="_blank"><i class="fab fa-facebook fa-2x"></i></a></span>
        &nbsp;<span><a href="https://www.google.com/search?q=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97&rlz=1C1VDKB_zh-TWTW973TW973&oq=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA&aqs=chrome.1.69i57j69i59l3j46i175i199i512j0i512j69i59l2.7043j0j7&sourceid=chrome&ie=UTF-8" target="_blank"><i class="fab fa-google-plus fa-2x"></i></a></span>
        &nbsp;<span><a href="https://www.google.com/maps/dir/25.0463388,121.4341894/25.0361253,121.4354521/@25.0407269,121.4302707,16z/data=!3m1!4b1!4m4!4m3!1m1!4e1!1m0" target="_blank"><i class="fas fa-map-marker-alt fa-2x"></i></a></span>
      </div>



    </div>
  </header><!-- End Header -->

  

  <section id="hero">
    <section id="about" class="about">
      
      <form method="post" action="login_check_user.php">

        <div class="container" style=" width:40% ;background-color:whitesmoke; opacity: 0.9; margin-top: 100px; padding: 50px;">
          <h1 style="text-align: center; color:#3C3C3C;">登入</h1>
          <p style="text-align: center; color:#CE0000; letter-spacing: 2px;">*為必填項目</p>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">*帳號</span>
            <input name="account" type="text" class="form-control" placeholder="帳號" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">*密碼</span>
            <input name="password" type="password" class="form-control" placeholder="密碼" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          <p style="text-align: center;">

           <!-- ======= 顯示錯誤訊息 ======= -->
            <?php
            $errortext = $_GET["error"];
            echo $errortext;
            ?>

          </p>
          <p style="text-align: center; color:#CE0000; letter-spacing: 2px;"><a href="register.php">尚未有帳號?點此註冊</a></p>
          <center>
            <button name="login" type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <span style="color: aliceblue;">登入</span>
            </button>
          </center>

      </form>



      </center>




      </div>
    </section><!-- End About Section -->







  </section>



  <main id="main">


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact">
            <h3>輔大學人旅店</h3>
            <p>
              242062 <br>
              新北市新莊區<br>
              中正路510號 <br><br>
              <i class="fas fa-phone"></i>&nbsp;&nbsp;(02)2904-5537<br>
              <i class="fas fa-mail-bulk"></i>&nbsp;&nbsp;a29045537@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>網站連結</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.facebook.com/%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8-%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97-109092651464386/" target="_blank">FACEBOOK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.google.com/search?q=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97&rlz=1C1VDKB_zh-TWTW973TW973&oq=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA&aqs=chrome.1.69i57j69i59l3j46i175i199i512j0i512j69i59l2.7043j0j7&sourceid=chrome&ie=UTF-8" target="_blank">GOOGLE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://house.nfu.edu.tw/FJU" target="_blank">輔仁大學校外賃居網</a></li>
            </ul>
          </div>

          <style>
            .videobox {
              position: relative;
              width: 100%;
              height: 0;
              padding-bottom: 56.25%;
            }

            .videobox iframe {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }

            .videobox embed {
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
            }
          </style>

          <div class="col-lg-5 col-md-12 footer-newsletter">
            <h4>輔仁大學SCHOLAR'S INN</h4>
            <div class="viewbox">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14459.744485496425!2d121.4323211!3d25.0362418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe342a67d6574f896!2z5aSp5Li75pWZ6LyU5LuB5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1623482749375!5m2!1szh-TW!2stw" allowfullscreen="true" loading="lazy">
              </iframe>
            </div>
            <br>
            <p><i class="fas fa-info-circle"></i>&nbsp;&nbsp;提供24小時櫃台服務</p>
          </div>

        </div>
      </div>
    </div>


  </footer><!-- End Footer -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>