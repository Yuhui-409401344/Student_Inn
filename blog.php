<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>房型一覽表</title>
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


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">

          <h2>房型一覽表</h2>
          <p>Single Room / Double Room / Triple Room </p>

        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li>房型一覽表</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->
    <?php
  
    if ($_SESSION['level'] <> "user") {
        header('location:login_user.php');
    }
    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
    if (!$link) {
      echo "連接失敗" . mysqli_connect_error();
    }
    mysqli_query($link, "set names utf8");
    $sql = "SELECT * FROM room";
    $result = mysqli_query($link, $sql);
    
    $account = $_SESSION['account'];
    $link_per = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
    if (!$link_per) {
      echo "連接失敗" . mysqli_connect_error();
    }
    mysqli_query($link_per, "set names utf8");
    $sql_per = "SELECT * FROM web_user_login where account = '$account' ";
    $result_per = mysqli_query($link_per, $sql_per);
    $record_per = mysqli_fetch_row($result_per)
    ?>
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <?
            while ($record = mysqli_fetch_row($result)) {
            ?>
              <article class="entry">
                <div class="entry-img">
                  <img src="<? echo $record[2] ?>" alt="" class="img-fluid">
                </div>
                <h2 class="entry-title" style="text-align: center;letter-spacing: 1px;">
                  <a href="blog_top1.php"><? echo $record[1] ?></a>
                </h2>
                <div class="entry-content">
                  <div style="padding-left: 75%;">
                  <?
                   $num = $record[0]+5;
                   if($record_per[$num] == '收藏'){
                  ?>
                    <a href="dislike.php?method=dislike&id=<? echo $record[1]; ?>"><i class="fas fa-star" style="font-size: 20px; color:#FFD306"></i></a>
                  <?}
                   elseif($record_per[($num)] == '無收藏'){
                  ?>
                    <a href="like.php?method=like&id=<? echo $record[1]; ?>"><i class="fas fa-star" style="font-size: 20px; color:#7B7B7B;"></i></a>
                  <?
                   }
                  ?>
                    &nbsp;&nbsp;
                    <span class="read-more">
                      <a href="<? echo $record[3] ?>" target="one">即刻訂房去</a>
                    </span>
                  </div>
                </div>
              </article><!-- End blog entry -->
            <? } ?>





          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Search</h3>
              <div class="sidebar-item search-form">
                <form action="">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div><!-- End sidebar search formn-->

              <h1 class="sidebar-title">旅店周圍地區</h1>


              <h3 class="sidebar-title"><i class="fas fa-bus-alt fa-sm"></i> 交通</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/MRT.jpg" alt="">
                  <h4><a href="https://www.google.com/search?q=%E6%8D%B7%E9%81%8B%E8%BC%94%E5%A4%A7%E7%AB%99&rlz=1C1VDKB_zh-TWTW973TW973&sxsrf=AOaemvI3WutY0M1Y7Jt98UT3LmNPJVK4sg%3A1635484561996&ei=kYN7YauIPKGzmAXP9KCwCQ&oq=%E6%8D%B7%E9%81%8B%E8%BC%94%E5%A4%A7%E7%AB%99&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyAggmOgcIIxCwAxAnOgcIABBHELADOgUIABDNAkoECEEYAFDmgwFYrpoBYN6eAWgCcAJ4AIABgwGIAZcGkgEDNC40mAEAoAEByAECwAEB&sclient=gws-wiz&ved=0ahUKEwjrlOni7u7zAhWhGaYKHU86CJYQ4dUDCA4&uact=5">捷運輔大站
                    </a></h4>
                  <time>新北市新莊區中正路510之1號</time>

                </div>

              </div>

              <h3 class="sidebar-title"><i class="fas fa-school fa-sm "></i> 學校</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/school.jpg" alt="">
                  <h4><a href="https://www.google.com/search?q=%E7%A7%81%E7%AB%8B%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8&rlz=1C1VDKB_zh-TWTW973TW973&sxsrf=AOaemvLGjPCtCRXefC7yYAm6RZYEpdxX_w%3A1635484880473&ei=0IR7YeOeHNnr-Qb2rJDQAQ&oq=%E7%A7%81%E7%AB%8B%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIECAAQHjIECAAQHjIECAAQHjIECAAQHjIICAAQCBAHEB4yCAgAEAgQBxAeMggIABAIEAcQHjIICAAQCBAHEB46BwgjELADECc6BwgAEEcQsAM6BQgAEM0COgQIIxAnOggIABCABBCxAzoHCCMQsAIQJzoECAAQDUoECEEYAFDmK1icO2CpPmgCcAJ4AIABggGIAdsFkgEDMi41mAEAoAEByAEKwAEB&sclient=gws-wiz&ved=0ahUKEwjjxtf67-7zAhXZdd4KHXYWBBoQ4dUDCA4&uact=5">輔仁大學</a>
                  </h4>
                  <time>新北市新莊區中正路510號</time>
                </div>

              </div>

              <h3 class="sidebar-title"><i class="fas fa-shopping-cart fa-sm"></i> 商場</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/costco.jpg" alt="">
                  <h4><a href="https://www.google.com/search?q=%E5%A5%BD%E5%B8%82%E5%A4%9Acostco+%E6%96%B0%E8%8E%8A%E5%BA%97&rlz=1C1VDKB_zh-TWTW973TW973&sxsrf=AOaemvLxluWgSkx5uV8yHVwe0I3a2_vWnw%3A1635485263733&ei=T4Z7YYaVLIb0-QaqmoLYBQ&oq=%E5%A5%BD%E5%B8%82%E5%A4%9ACostco&gs_lcp=Cgdnd3Mtd2l6EAEYADIECCMQJzIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDoICAAQgAQQsAM6BQgmELADOgIIJjoECAAQHjoGCAAQCBAeSgQIQRgBUKUUWPIXYIIlaAFwAHgAgAFYiAHLApIBATSYAQCgAQHIAQXAAQE&sclient=gws-wiz">Costco好市多</a>
                  </h4>
                  <time>新北市新莊區建國一路138號</time>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/mall.jpg" alt="">
                  <h4><a href="https://www.google.com/search?q=%E8%BC%94%E5%A4%A7%E5%85%A8%E8%81%AF&rlz=1C1VDKB_zh-TWTW973TW973&sxsrf=AOaemvIQB4IWuzLLb6XaMsTxAU5CGX5TLA%3A1635485457486&ei=EYd7Ye77HK22mAWg37SIDA&oq=%E8%BC%94%E5%A4%A7%E5%85%A8%E8%81%AF&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIFCAAQgAQ6CAgAELADEM0COgQIIxAnOgIIJjoECAAQHjoHCCMQ6gIQJzoICAAQgAQQsQM6CwgAEIAEELEDEIMBOggIABCxAxCDAToICAAQgAQQiwM6BAgAEEM6CggAELEDEIMBEEM6BwgjELACECc6BwgAELEDEA06BAgAEA06CggAELEDEIMBEA06BQgAEM0CSgQIQRgBUNnBDVjlgg5gjIgOaARwAHgDgAF8iAGkFZIBBDIzLjaYAQCgAQGwAQrIAQS4AQLAAQE&sclient=gws-wiz&ved=0ahUKEwiuyOmN8u7zAhUtG6YKHaAvDcEQ4dUDCA4&uact=5">全聯福利中心
                    </a></h4>
                  <time>新北市新莊區中正路510號輔大1樓焯炤館</time>

                </div>

              </div>

              <h3 class="sidebar-title"><i class="fas fa-hospital fa-sm"></i> 醫院</h3>
              <div class="sidebar-item recent-posts">
                <div class="post-item clearfix">
                  <img src="assets/img/hospital.jpg" alt="">
                  <h4><a href="https://www.google.com/search?q=%E8%BC%94%E5%A4%A7%E9%86%AB%E9%99%A2&rlz=1C1VDKB_zh-TWTW973TW973&sxsrf=AOaemvKloTjHfEFqob73betVXsnk0m4n2A%3A1635486016825&ei=QIl7YfruMZLrwQPizL6wBA&oq=%E8%BC%94%E5%A4%A7%E9%86%AB%E9%99%A2&gs_lcp=Cgdnd3Mtd2l6EAMyBAgjECcyBAgjECcyBAgjECcyBQgAEIAEMggIABCABBCxAzILCAAQgAQQsQMQgwEyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOggIABCwAxDNAjoCCCY6BggAEAQQHjoECAAQHjoECAAQQzoKCAAQsQMQgwEQQzoHCAAQsQMQQzoHCAAQgAQQCjoFCAAQzQJKBAhBGAFQ_AZY1R1glyJoAXAAeACAAVeIAdMGkgECMTGYAQCgAQHIAQLAAQE&sclient=gws-wiz&ved=0ahUKEwj6jsWY9O7zAhWSdXAKHWKmD0YQ4dUDCA4&uact=5">輔仁大學附設醫院</a>
                  </h4>
                  <time>新北市泰山區貴子路69號</time>
                </div>

              </div>


              <!-- End sidebar recent posts-->



            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

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