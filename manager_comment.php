<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>回覆評論專區</title>
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

    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="breadcrumb-hero">
                <div class="container">

                </div>
            </div>
            <div class="container">
                <ol>
                    <li><a href="index.php">首頁</a></li>
                    <li>顧客評論專區</li>
                </ol>
            </div>
        </section><!-- End Breadcrumbs -->
        <section id="blog" class="blog">
            <?php
            $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
            if (!$link) {
                echo "連接失敗" . mysqli_connect_error();
            }
            mysqli_query($link, "set names utf8");
            $sql = "SELECT * FROM web_user_feedback";
            $result = mysqli_query($link, $sql);
            ?>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-8 entries">
                        <article class="entry entry-single">
                            <div class="blog-comments">
                                <h4 class="comments-count"><i class="fas fa-comments"></i> 顧客評論</h4>
                                <?
                                while ($record = mysqli_fetch_row($result)) {
                                ?>
                                    <div class="card" style="margin: 3%; border-radius:10px; background-color: #FCFCFC; border:none; box-shadow:20px; ">
                                        <div class="card-body">
                                            <div id="comment-2" class="comment" style="padding-left: 5%;">
                                                <div class="d-flex">
                                                    <div>
                                                        <p style="font-size: 5px;"><b><u>評論編號<? echo $record[0] ?></u></b></p>
                                                        <h5 style="color:#0066CC;"><b><i class="fas fa-user-circle"></i> 帳號【<? echo $record[1] ?>】</b> <a href="#" class="reply"></a></h5>
                                                        <time datetime="2020-01-01"></time>
                                                        <h6><b><? echo $record[2] ?></b></h6>
                                                    </div>
                                                </div>
                                                <div id="comment-reply-1" class="comment comment-reply">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 style="color:#94c045;"><i class="fas fa-store-alt"></i><b> 業主回覆</b> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                                                            <time datetime="2020-01-01"></time>
                                                            <h6><b><? echo $record[4] ?></b></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success" style="font-size: 13px; margin-left:80%;">
                                                <? echo "<a style=color:white; href=manager_comment_update.php?method=manager_comment_update&id=$record[0]>" ?>修改回覆</a></button>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </article>




                    </div><!-- End blog entries list -->

                    <?php


                    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

                    if (!$link) {
                        echo "連接失敗" . mysqli_connect_error();
                    }
                    mysqli_query($link, "set names utf8");

                    $sql = "SELECT * FROM web_user_feedback";

                    $result_feedback = mysqli_query($link, $sql);
                    ?>


                    <div class="col-lg-4">

                        <div class="sidebar">





                            <h3 class="sidebar-title" style="color: brown;">
                                <div class="spinner-grow text-danger" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                                &nbsp;請優先處理!
                            </h3>

                            <?

                            while ($record_feedback = mysqli_fetch_row($result_feedback)) {
                                if ($record_feedback[3] != "") {
                            ?>
                                    <div class="sidebar-item tags">

                                        <div class="alert alert-danger" role="alert" style="width: 100%;">
                                            <center>
                                                <div><i class="fas fa-exclamation-triangle"></i>&nbsp;帳號:<b>【<? echo $record_feedback[1] ?>】</b>回報錯誤</div>
                                                <span style="color: black; font-size: 13px;">錯誤內容: <b><? echo $record_feedback[3] ?></b>
                                            </center></span>

                                        </div>
                                    </div><!-- End sidebar tags-->

                            <? }
                            } ?>
                            <!-- <center>
      <div class="btn-group" role="group" aria-label="Basic mixed styles example" data-bs-toggle="modal" data-bs-target="#manager_fix">
        <button type="button" class="btn btn-success" style="font-size: 5px;">修改資料</button>
      </div>

    </center> -->





                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->
                </div>

            </div>
        </section><!-- End Blog Single Section -->


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