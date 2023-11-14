<!DOCTYPE html>
<html lang="en">

<head>
    <!--引用icon-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!--引用css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />



    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <title>顧客訂房刪除成功</title>


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
    <?
    include "user_tools.php";
    ?>
    <!-- End Header class="active" -->


    <main id="main" style="margin-top: 0;padding: 0;">
        <section id="about" class="about" style=" margin-top: 7%;">

            <form action="personal.php">
                <div class="container">
                    <div class="row mt-5 justify-content-center" data-aos="fade-up">
                        <div class="col-lg-10" style="margin-top: 30px;">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form" style="margin: 5%;">

                                <center>
                                    <h1> <b style="color:#94c045;">成功</b>取消訂房 !</h1>
                                    <table style="width:90%;">
                                        <tr>
                                            <td style="width: 50%; padding: 15px;">
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">訂房帳號</span>
                                                    <input name="account" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $account ?>" readonly>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <center>
                                                    <div class="alert alert-success" role="alert" style="margin-right:5%;margin-left:5%;padding-top:3%;">
                                                        <h5>已收到您的取消訂房通知。</h5>
                                                        <h6><i class="far fa-clock"></i> 取消時間 : <? echo date("Y-m-d"); ?></h6>
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <tr>
                                            <br>
                                            <td>
                                                <center><button type="submit" class="btn btn-success" style="width:100px;">確定</button></center>
                                            </td>
                                        </tr>
                                    </table>
                                </center>
                                <br>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        </form>
    </main>







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
    <!-- End Footer -->

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