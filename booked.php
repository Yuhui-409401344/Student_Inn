<!--登入權限-->

<?
if ($_SESSION['level'] <> "admin") {
  header('location:login_user.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!--引用icon-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <!--引用css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
  <!--引用jQuery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!--引用dataTables.js-->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">
    $(function() {
      $("#myDataTalbe").DataTable({
        searching: false, //關閉filter功能
        columnDefs: [{
          targets: [3],
          orderable: false,

        }]

      });
    });
  </script>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>顧客訂房一覽表</title>


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

      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li>顧客訂房一覽表</li>

        </ol>
      </div>
    </section><!-- End Breadcrumbs -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">
              <div class="accordion" id="accordionPanelsStayOpenExample">
                <?php
                $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
                if (!$link) {
                  echo "連接失敗" . mysqli_connect_error();
                }
                mysqli_query($link, "set names utf8");
                $sql = "SELECT * FROM web_manager_data";
                $result = mysqli_query($link, $sql);
                ?>
                <h1 style="text-align: center;"><b>顧客訂房一覽表</b></h1>
                <br>
                <div class="accordion-item">
                  <table id="myDataTalbe" class="display pa" style="border-color: white;">
                    <thead class="co">
                      <tr>
                        <th>編號</th>
                        <th>訂房帳號</th>
                        <th>訂房大名</th>
                        <th>入住房型</th>
                        <th>入住日期</th>
                        <th>退房日期</th>
                        <th>付款方式</th>
                        <th>使用優惠</th>
                        <th>價錢</th>
                        <th>修改</th>
                        <th>刪除</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?
                      while ($record = mysqli_fetch_row($result)) {
                      ?><tr>
                          <td><? echo $record[0] ?></td>
                          <td><? echo $record[1] ?></td>
                          <td><? echo $record[8] ?></td>
                          <td><? echo $record[2] ?></td>
                          <td><? echo $record[3] ?></td>
                          <td><? echo $record[4] ?></td>
                          <td><? echo $record[5] ?></td>
                          <td><? echo $record[6] ?></td>
                          <td>$<? echo $record[7] ?></td>
                          <td><button type="submit" class="btn btn-success"><? echo "<a style=font-size:3px;color:aliceblue href=manager_update.php?method=manager_update&id=$record[0]>" ?>修改</a></button></td>
                          <td><button type="submit" class="btn btn-danger"><? echo "<a style=font-size:3px;color:aliceblue; href=manager_delete.php?method=manager_delete&id=$record[0]" ?>>刪除</a></button></td>
                        </tr>
                      <?
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <br>




                </table>

              </div>




              <div class="entry-content">







              </div>

            </article><!-- End blog entry -->





          </div>


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
                  <span class="visually-hidden"></span>
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
                  </div>

              <? }
              } ?>




            </div>

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->


  </main><!-- End #main -->




  <!-- 訂房資料修改1 -->
  <div class="modal fade" id="manager_fix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-wrench"></i> 資料修改</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <h5 style="color:#FF5809;"><strong>選擇修改訂房編號。</strong></h5>

          <table class="table table-hover">
            <tbody>

              <tr>
                <td><b>訂房編號:</b></td>

                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>選擇</option>
                    <option value="1">001</option>
                    <option value="2">002</option>
                    <option value="3">003</option>
                    <option value="4">004</option>
                    <option value="5">005</option>
                    <option value="6">006</option>
                    <option value="7">007</option>
                    <option value="8">008</option>
                  </select>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <a href="fix.php" style="color: cornsilk;"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</a></button>
        </div>
      </div>
    </div>
  </div>










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