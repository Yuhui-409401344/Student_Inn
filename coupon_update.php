<?php
$id = $_GET['id'];
$method = "coupon_update";
$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$sql = "select * from  web_manager_coupon where id = '$id'";
$cou_rs = mysqli_query($link, $sql);
if ($cou_record = mysqli_fetch_assoc($cou_rs)) {
  $id = $cou_record['id'];
  $name = $cou_record['name'];

  $big_two_img = $cou_record['big_two_img'];
  $big_two = $cou_record['big_two'];
  $big_two_w_after = $cou_record['big_two_w_after'];
  $big_two_w_before = $cou_record['big_two_w_before'];
  $big_two_h_after = $cou_record['big_two_h_after'];
  $big_two_h_before = $cou_record['big_two_h_before'];
  $big_two_content = $cou_record['big_two_content'];

  $two = $cou_record['two'];
  $two_img = $cou_record['two_img'];
  $two_w_after = $cou_record['two_w_after'];
  $two_w_before = $cou_record['two_w_before'];
  $two_h_after = $cou_record['two_h_after'];
  $two_h_before = $cou_record['two_h_before'];
  $two_content = $cou_record['two_content'];

  $one = $cou_record['one'];
  $one_img = $cou_record['one_img'];
  $one_w_after = $cou_record['one_w_after'];
  $one_w_before = $cou_record['one_w_before'];
  $one_h_after = $cou_record['one_h_after'];
  $one_h_before = $cou_record['one_h_before'];
  $one_content = $cou_record['one_content'];

  $three = $cou_record['three'];
  $three_img = $cou_record['three_img'];
  $three_w_after = $cou_record['three_w_after'];
  $three_w_before = $cou_record['three_w_before'];
  $three_h_after = $cou_record['three_h_after'];
  $three_h_before = $cou_record['three_h_before'];
  $three_content = $cou_record['three_content'];
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

  <title>促銷優惠方案修改</title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

  <form method="post" action="coupon_dblink.php" target="_top">
    <input type="hidden" name="method" value="<? echo $method ?>">
    <main id="main" style="margin-top: 0;padding: 0;">
      <section id="about" class="about">
        <div class="container">
          <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10" style="margin-top: 30px;">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <center>
                  <h1><b style="color:#94c045;">修改</b>促銷方案的資料</h1>
                  <table style="width:90%;">
                    <tr>
                      <td style="width: 50%; padding: 15px;">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">促銷編號</span>
                          <input name="id" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" readonly value="<? echo $id ?>">
                        </div>
                      </td>
                      <td style="width: 50%; padding: 15px;">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">促銷名稱</span>
                          <input name="name" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $name ?>">
                        </div>
                      </td>
                      </td>
                    </tr>
                    <!-- 超大豪華雙人房 -->
                    <div>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <h6><b><i class="fas fa-wrench"></i>&nbsp;&nbsp;超大豪華雙人房</b></h6>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">照片(超大豪華雙人房)</span>
                            <input name="big_two_img" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $big_two_img ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>促銷價</span>
                            <input name="big_two_w_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $big_two_w_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>原價</span>
                            <input name="big_two_w_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $big_two_w_before ?>">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>促銷價</span>
                            <input name="big_two_h_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $big_two_h_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>原價</span>
                            <input name="big_two_h_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $big_two_h_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group">
                            <span class="input-group-text">方案內文</span>
                            <input name="big_two_content" type="textarea" class="form-control" aria-label="With textarea" value="<? echo $big_two_content ?>">
                          </div>
                        </td>
                      </tr>
                    </div>
                    <!-- 豪華雙人房 -->
                    <div>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <h6><b><i class="fas fa-wrench"></i>&nbsp;&nbsp;豪華雙人房</b></h6>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">照片(豪華雙人房)</span>
                            <input name="two_img" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $two_img ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>促銷價</span>
                            <input name="two_w_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $two_w_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>原價</span>
                            <input name="two_w_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $two_w_before ?>">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>促銷價</span>
                            <input name="two_h_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $two_h_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>原價</span>
                            <input name="two_h_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $two_h_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group">
                            <span class="input-group-text">方案內文</span>
                            <input name="two_content" type="textarea" class="form-control" aria-label="With textarea" value="<? echo $two_content ?>">
                          </div>
                        </td>
                      </tr>
                    </div>

                    <!-- 超大豪華單人房 -->
                    <div>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <h6><b><i class="fas fa-wrench"></i>&nbsp;&nbsp;豪華單人房</b></h6>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">照片(豪華單人房)</span>
                            <input name="one_img" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $one_img ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>促銷價</span>
                            <input name="one_w_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $one_w_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>原價</span>
                            <input name="one_w_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $one_w_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>促銷價</span>
                            <input name="one_h_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $one_h_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>原價</span>
                            <input name="one_h_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $one_h_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group">
                            <span class="input-group-text">方案內文</span>
                            <input name="one_content" class="form-control" aria-label="With textarea" value="<? echo $one_content ?>">
                          </div>
                        </td>
                      </tr>
                    </div>

                    <!-- 超大豪華三人房 -->
                    <div>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <h6><b><i class="fas fa-wrench"></i>&nbsp;&nbsp;豪華三人房</b></h6>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">照片(豪華三人房)</span>
                            <input name="three_img" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $three_img ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>促銷價</span>
                            <input name="three_w_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $three_w_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>平日</b>原價</span>
                            <input name="three_w_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $three_w_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>促銷價</span>
                            <input name="three_h_after" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $three_h_after ?>">
                          </div>
                        </td>
                        <td style="width: 50%;padding: 15px;">
                          <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><b>價日</b>原價</span>
                            <input name="three_h_before" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1" value="<? echo $three_h_before ?>">
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td style="width: 50%; padding: 15px;" colspan="2">
                          <div class="input-group">
                            <span class="input-group-text">方案內文</span>
                            <input name="three_content" type="textarea" class="form-control" aria-label="With textarea" value="<? echo $three_content ?>">
                          </div>
                        </td>
                      </tr>
                    </div>
                    <tr>
                      <td style="width: 50%;padding: 15px;">
                        <center>
                          <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#delet_fix">
                            <button type="button" class="btn btn-danger" style="font-size: 5px;">刪除此方案</button>
                          </div>
                        </center>
                      </td>
                      <td style="width: 50%;padding: 15px;">
                        <center>
                          <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#sure_fix">
                            <button type="button" class="btn btn-success" style="font-size: 5px;">確定修改</button>
                            <input type="hidden" name="sure_fix" value="sure_fix">

                          </div>
                        </center>
                      </td>
                    </tr>
                  </table>
                </center>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- 修改 -->
    <div class="modal fade" id="sure_fix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
          </div>
        </div>
      </div>
    </div>
  </form>
  <form target="_top" action="coupon_delete.php">
    <!-- 可以刪除 -->
    <div class="modal fade" id="delet_fix" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal" <? echo "method=coupon_delete&id=$id" ?>>確定刪除</button>
          </div>
        </div>
      </div>
    </div>
  </form>









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

  </form>

</body>

</html>