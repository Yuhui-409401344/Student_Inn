<?
if ($_SESSION['level'] <> "admin") {
    header('location:login_user.php');
} else {
    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
    if (!$link) {
      echo "連接失敗" . mysqli_connect_error();
    }
    mysqli_query($link, "set names utf8");
    $sql = "SELECT * FROM income";
    $rs = mysqli_query($link, $sql);
    $method = "report_update";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--引用icon-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

  <!--引用css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />



  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <title>顧客訂房資料修改</title>


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
  <form method="post" action="修改營收_dblink.php">
    <input type="hidden" name="method" value="<? echo $method ?>">
    <main id="main" style="margin-top: 0;padding: 0;">
      <section id="about" class="about" style=" margin-top: 5%;">
        <div class="container">
          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10" style="margin-top: 30px;">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <center>
                  <h1><b style="color:#94c045;">修改</b>顧客訂房資料</h1>
                  <br>
                  <form method="post" action="test2.php">
                    <table class="table table-hover">
                      <thead>
                        <tr style="text-align: center;">
                          <th scope="col">#</th>
                          <th scope="col">月份</th>
                          <th scope="col">入住營收比例(單位%)</th>
                          <th scope="col">2020入住營收總額</th>
                          <th scope="col">2021入住營收總額</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        while ($record = mysqli_fetch_row($rs)) {
                        ?>
                          <tr>
                          <td>
                            <center>
                              <div class="input-group flex-nowrap" style="width:70px">
                                <input name="id[]" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<? echo $record[0] ?>" readonly>
                              </div>
                            </center>
                            </td>
                            <td>
                            <center>
                              <div class="input-group flex-nowrap" style="width:70px">
                                <input name="month[]" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<? echo $record[1] ?>" readonly>
                              </div>
                            </center>
                            </td>
                            <td>
                              <center>
                              <div class="input-group flex-nowrap" style="width:70px">
                                <input name="rate[]" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<? echo $record[2] ?>" required>
                              </div>
                              </center>
                            </td>
                            <td>
                            <center>
                              <div class="input-group flex-nowrap" style="width:130px">
                                <input name="saving_2020[]" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<? echo $record[3] ?>" required>
                              </div>
                            </center>
                            </td>
                            <td>
                            <center>
                              <div class="input-group flex-nowrap" style="width:130px">
                                <input name="saving_2021[]" type="text" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" value="<? echo $record[4] ?>" required>
                              </div>
                            </center>
                            </td>
                          </tr>
                        <? } ?>
                      </tbody>
                    </table>
                    <center><button type="submit" class="btn btn-primary">提交</button></center>
                  </form>
                </center>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>
  </form>








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