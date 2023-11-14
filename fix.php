<!DOCTYPE html>
<html lang="en">

<head>
  <!--引用icon-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
    crossorigin="anonymous"></script>

  <!--引用css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />



  <!--引用jQuery-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <!--引用dataTables.js-->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript">

    $(function () {
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

  <title>顧客訂房修改</title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/Logo.png" style="border-radius: 10px;"></img>&nbsp;&nbsp;SCHOLAR'S INN</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="booked.php" class="active">顧客訂房一覽表</a></li>
          <li><a href="news.php" >促銷公告修改</a></li>

          <li><a href="report.php">營運報表</a></li>




          <li><a class="getstarted" href="index.php">登出</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header class="active" -->



  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="breadcrumb-hero">
        <div class="container">
         
            <h2>顧客訂房修改</h2>

        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li><a href="booked.php">返回顧客訂房一覽表</a></li>
          <li>顧客訂房修改</li>

        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= 更改Input ======= -->
  
  <section id="about" class="about">
   

     
      <!-- 填寫 -->
    <section id="contact" class="contact" style="padding: 10px;">
      <div class="container">



        <div class="row mt-5 justify-content-center" data-aos="fade-up" >
          <div class="col-lg-10" style="margin-top: 25px;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <center>
                <h1>修改<b>訂房編號001</b>的資料</h1>
                <table style="width:90%;">
                <tr>
                  <td style="width: 50%;padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">訂房大名:</span>
                      <input type="text" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                  
                  
                  <td  style="width: 50%; padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">訂房電話:</span>
                      <input type="text" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td  style="width: 50%; padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">入住日期:</span>
                      <input type="date" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                  
                  
                  <td  style="width: 50%;padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">退房日期:</span>
                      <input type="date" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="width: 50%;padding: 15px;">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>入住房型修改</option>
                      <option value="1">超大豪華雙人房</option>
                      <option value="2">豪華雙人房</option>
                      <option value="3">豪華單人房</option>
                      <option value="3">豪華三人房</option>
                    </select>
                  </td>
                  
                  
                  <td style="width: 50%;padding: 15px;">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>入住間數修改</option>
                      <option value="1">1間</option>
                      <option value="2">2間</option>
                      <option value="3">3間</option>
                      <option value="4">4間</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td style="width: 50%;padding: 15px;">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>使用優惠修改</option>
                      <option value="1">早鳥優惠方案</option>
                      <option value="2">五倍卷優惠方案</option>
                      <option value="3">學生證優惠方案</option>
                      <option value="4">早鳥優惠方案</option>
                    </select>
                  </td>
                  
                  
                  <td style="width: 50%;padding: 15px;">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                      <option selected>付款方式修改</option>
                      <option value="1">現場付款(含五倍券)</option>
                      <option value="2">郵局匯款</option>
                      <option value="3">信用卡付款</option>
                      <option value="4">銀行轉帳</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td style="width: 50%;padding: 15px;">
                    <center><div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料"
                    data-bs-toggle="modal" data-bs-target="#delet_fix" >
                    <button type="button" class="btn btn-danger" style="font-size: 15px;" >刪除此筆資料</button>
                    </div></center>
                  </td>
                 
                  
                  
                  <td style="width: 50%;padding: 15px;">
                    
                    <center><div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料"
                      data-bs-toggle="modal" data-bs-target="#sure_fix">
                      <button type="button" class="btn btn-success" style="font-size: 5px; font-size: 15px;">確定修改</button>
                      </div></center>
                  </td>
                </tr>


                

                
              </table></center>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
   
  </section><!-- End About Section -->


  </main><!-- End #main -->




 
 

  <!-- 可以取消訂房 -->
  <div class="modal fade" id="delet_fix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            <i class="fas fa-exclamation-circle"></i>&nbsp;&nbsp;注意!
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <center>
          <div class="modal-body">

            <br>
            <span style="color:#FF0000;letter-spacing: 2px;"><b>確定要刪除此筆資料嗎?</b></span>
            <p style="letter-spacing: 2px;">(刪除後將無法復原。)</p>
          </div>
        </center>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">確定刪除</button>
        </div>
      </div>
    </div>
  </div>
<!-- 修改訂房訂房 -->
<div class="modal fade" id="sure_fix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">
        <i class="fas fa-calendar-check"></i>&nbsp;&nbsp;完成!
      </h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <center>
      <div class="modal-body">

        <br>
        <span style="color:#FF0000;letter-spacing: 2px;"><b>已成功修改!</b></span>
        <p style="letter-spacing: 2px;">請前往確認</p>
        
      </div>
    </center>
    <div class="modal-footer">
      
      <a href="booked.php" style="color: cornsilk;"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</a></button>
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
              <li><i class="bx bx-chevron-right"></i> <a
                  href="https://www.facebook.com/%E8%BC%94%E4%BB%81%E5%A4%A7%E5%AD%B8-%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97-109092651464386/"
                  target="_blank">FACEBOOK</a></li>
              <li><i class="bx bx-chevron-right"></i> <a
                  href="https://www.google.com/search?q=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA%E6%97%85%E5%BA%97&rlz=1C1VDKB_zh-TWTW973TW973&oq=%E8%BC%94%E5%A4%A7%E5%AD%B8%E4%BA%BA&aqs=chrome.1.69i57j69i59l3j46i175i199i512j0i512j69i59l2.7043j0j7&sourceid=chrome&ie=UTF-8"
                  target="_blank">GOOGLE</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://house.nfu.edu.tw/FJU"
                  target="_blank">輔仁大學校外賃居網</a></li>
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
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14459.744485496425!2d121.4323211!3d25.0362418!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe342a67d6574f896!2z5aSp5Li75pWZ6LyU5LuB5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1623482749375!5m2!1szh-TW!2stw"
                allowfullscreen="true" loading="lazy">
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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