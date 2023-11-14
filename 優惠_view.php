

<?
if ($_SESSION['level'] <> "user") {
    header('location:login_user.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>優惠促銷方案</title>
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
          <h2>最新促銷方案</h2>
          <p>Coupon</p>

        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li>最新促銷方案</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <?php
    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
    if (!$link) {
      echo "連接失敗" . mysqli_connect_error();
    }
    mysqli_query($link, "set names utf8");
    $sql = "SELECT * FROM web_manager_coupon";
    $result = mysqli_query($link, $sql);
    ?>
    <section id="pricing" class="pricing">
      <div class="container">
        <?
          while ($record = mysqli_fetch_row($result)) {
        ?>
        <div class="row">
          <h1 style="text-align: center;"><b><? echo $record[1] ?>&nbsp;</b><span style="color: brown; font-size: 20px; margin-top: 0;"></span></h1>
          <br><br>
          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <br>
            <div class="box featured" data-aos="fade-up">
              <span class="advanced" style="background-color: brown;">限時優惠</span>
              <h3><? echo $record[2] ?></h3>
              <img src="<? echo $record[3] ?>" style="width: 90%; border-radius: 2px; box-shadow:3px 3px 6px gray"></img>
              <br><br>
              <h4><sup>$</sup><? echo $record[4] ?><span> / 平日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na"><? echo $record[5] ?></h4>
                </li>
              </ul>
              <h4><sup>$</sup><? echo  $record[6] ?><span> / 假日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na"><? echo  $record[7] ?></h4>
                </li>
                <li><?  echo $record[8] ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="rigester.php" class="btn-buy">註冊訂房</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <br>
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3><? echo $record[9] ?></h3>
              <img src="<? echo $record[10] ?>" style="width: 90%; border-radius: 2px; box-shadow:3px 3px 6px gray">
              <br><br>
              <h4><sup>$</sup><? echo $record[11] ?><span> / 平日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[12] ?></h4>
                </li>
              </ul>
              <h4><sup>$</sup><? echo $record[13] ?><span> / 假日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[14] ?></h4>
                </li>
                <li><? echo $record[15] ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="rigester.php" class="btn-buy">註冊訂房</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <br>
            <div class="box" data-aos="fade-up" data-aos-delay="200">
              <h3><? echo $record[16] ?></h3>
              <img src="<? echo $record[17] ?>" style="width: 90%;border-radius: 2px; box-shadow:3px 3px 6px gray">
              <br><br>
              <h4><sup>$</sup><? echo $record[18] ?><span> / 平日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[19] ?></h4>
                </li>
              </ul>
              <h4><sup>$</sup><? echo $record[20] ?><span> / 假日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[21] ?></h4>
                </li>
                <li><? echo $record[22] ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="rigester.php" class="btn-buy">註冊訂房</a>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <br>
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <span class="advanced" style="background-color:goldenrod;">超划算!</span>

              <h3><? echo $record[23] ?></h3>
              <img src="<? echo $record[24] ?>" style="width: 90%; border-radius: 2px; box-shadow:3px 3px 6px gray">
              <br><br>
              <h4><sup>$</sup><? echo $record[25] ?><span> / 平日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[26] ?></h4>
                </li>
              </ul>
              <h4><sup>$</sup><? echo $record[27] ?><span> / 假日晚</span></h4>
              <ul>
                <li>
                  <h4 class="na">$<? echo $record[28] ?></h4>
                </li>
                <li><? echo $record[29] ?></li>
              </ul>
              <div class="btn-wrap">
                <a href="rigester.php" class="btn-buy">註冊訂房</a>
              </div>
            </div>
          </div>

        </div>
        <br><br>
        <?
          }
        ?>

      </div>
    </section><!-- End  -->

    
    <!-- =======常見問題 ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>常見問題</h2>

        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>可以同時使用多種優惠方案嗎?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              所有優惠僅可搭配<b>五倍券優惠方案</b>，其餘不可同時使用。
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>請問可以分期付款嗎?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              <b>早鳥優惠不提供分期付款的服務</b>，需入住前結清。
            </p>
            <p>
              <b>五倍券優惠不提供分期付款的服務</b>，需入住時於櫃檯結清。
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>若當天無法入住，可提供全額退款嗎?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              為保障所有顧客權益，<b>若於入住一天前取消，將可退還八成的訂房費用。若於入住當天取消，將退還五成的訂房費用。</b>敬請顧客配合，不得有議。
            </p>
            <p style="color: firebrick;">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;入住當天，不提供線上取消訂房。
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>優惠方案有何限制呢?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              除五倍券優惠除外，其餘需<b>實名制購買</b>，限訂購人使用，不得轉售。
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="bx bx-help-circle"></i>
            <h4>可使用那些結帳方式呢?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              可使用信用卡、郵局匯款、銀行轉帳等方式。
            </p>
            <p style="color: firebrick;">
              <i class="fas fa-exclamation-triangle"></i>&nbsp;請務必完成繳費程序，才算訂房成功。
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End Frequently Asked Questions Section -->

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