

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

  <title>個人資料</title>


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

          <h2>個人資料</h2>
          <p>Personal Information</p>

        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li>個人資料</li>

        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="accordion" id="accordionPanelsStayOpenExample">

                <!-- ======= HERE======= -->



                <!-- ======= 顧客訂房資料 ======= -->


                <?php


                $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

                if (!$link) {
                  echo "連接失敗" . mysqli_connect_error();
                }


                mysqli_query($link, "set names utf8");
                $account = $_SESSION['account'];


                $sql = "SELECT * FROM web_manager_data WHERE account = '$account' order by date_in asc ";


                $result9 = mysqli_query($link, $sql);
                ?>

                <h2 style="text-align: center;"><b><i class="fas fa-calendar-check"></i> 以 下 為 您 的 訂 房 紀 錄</b></h2>


                <?

                while ($record9 = mysqli_fetch_row($result9)) {
                ?>

                  <br>
                  <div class="accordion-item">

                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <!-- ======= 第一列 ======= -->
                      <button style="color:	#0080FF ; font-weight: bold; font-size: 20px;" class=" accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        訂房編號<? echo $record9[0] ?>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body ccddnn">

                        <!-- ======= 表格 ======= -->

                        <table class="table table-hover table-rwd" style="text-align: center;">
                          <thead>
                            <th colspan="2">
                              訂房編號<? echo $record9[0] ?>
                            </th>

                          </thead>
                          <tbody>
                            <tr class="tr-only-hide">
                              <th>訂房大名:</th>
                              <th><? echo $record9[1] ?></th>
                            </tr>

                            <tr>
                              <th>房型:</th>
                              <th><? echo $record9[2] ?></th>
                            </tr>

                            <tr>
                              <th>入住日期:</th>
                              <th><? echo $record9[3] ?></th>
                            </tr>

                            <tr>
                              <th>退房日期:</th>
                              <th><? echo $record9[4] ?></th>
                            </tr>
                            <tr>
                              <th>付款方式:</th>
                              <th><? echo $record9[5] ?></th>
                            </tr>

                            <tr>
                              <th>使用優惠:</th>
                              <th><? echo $record9[6] ?></th>
                            </tr>

                            <tr>
                              <th>價錢:</th>
                              <th>$<? echo $record9[7] ?></th>
                            </tr>






                            <!-- ======= 第一列(修改按鈕) ======= -->

                            <table>
                              <center>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" data-bs-toggle="modal">

                                  <button type="button" class="btn btn-success" style="font-size: 5px;"> <? echo "<a style=color:white; href=personal_update.php?method=personal_update&id=$record9[0]>" ?>修改資料</a></button>

                                </div>
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#staticBackdrop_delet">
                                  <button type="button" class="btn btn-danger" style="font-size: 5px;"> <? echo "<a style=color:white; href=blog_delete.php?method=blog_delete&id=$record9[0]&date_in=$record9[3]>" ?>取消訂房</a></button>

                                </div>
                              </center>





                            </table>


                          </tbody>
                        </table>




                      </div>
                    </div>



                  </div>
                <? } ?>



              </div>



              <!-- ======= (回饋建議) ======= -->

              <div class="entry-content">

                <?
                $method = "comment_insert";
                $account = $_SESSION['account'];
                $comment = "";
                $wrong = "";
                ?>
                <form method="post" action="personal_feedback_dblink.php">
                  <blockquote style="padding:5%;padding-top: 1%;">

                    <table>
                      <center>
                        <br>
                        <div class="reply-form">
                          <h4><b><i class="fas fa-comments"></i> 回饋與建議</b></h4>
                          <input name="account" type="hidden">
                          <input type=hidden name="method" value="<? echo $method ?>">
                          <div class="row">
                            <div class="col form-group ">
                              <textarea name="comment" class="form-control" placeholder="請寫下此次訂房的建議，幫助我們提供更好的服務!"></textarea>
                            </div>
                          </div>
                          <br>
                          <h4><b style="color: red;"><i class="fas fa-times-circle"></i> 回報嚴重錯誤</b></h4>
                          <div class="row">
                            <div class="col form-group ">
                              <textarea name="wrong" class="form-control" placeholder="我們將盡快與您覆!"></textarea>
                            </div>
                          </div>
                          <br>
                          <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedback">
                            送出
                          </button>
                        </div>
                      </center>
                    </table>
                  </blockquote>
                </form>
              </div>
            </article>
          </div>

          <div class="col-lg-4">

            <div class="sidebar">
              <?php
              $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
              if (!$link) {
                echo "連接失敗" . mysqli_connect_error();
              }
              mysqli_query($link, "set names utf8");
              $account = $_SESSION['account'];
              $sql = "SELECT * FROM web_user_login WHERE account = '$account'  ";
              $result2 = mysqli_query($link, $sql);
              $record2 = mysqli_fetch_row($result2);
              ?>
              <h3 style="text-align: center;"><b><? echo substr($record2[0], 3)  ?>貴賓，您好!</b></h3>
              <br><br>
              <h3 class="sidebar-title"><i class="fas fa-info-circle"></i> 個人資料</h3>
              <div class="sidebar-item categories">
                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <td>姓名:</td>
                      <td>
                        <? echo $record2[0] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>帳號:</td>
                      <td>
                        <? echo $record2[3] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>電話:</td>
                      <td>
                        <? echo $record2[1] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>電子信箱:</td>
                      <td><? echo $record2[2] ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--修改資料按鈕-->
              <center>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" 
                <? echo "method=personal_update&account=$account" ?>>修改</button>
              </center>





              <br><br>



              <?php
              $account = $_SESSION['account'];
              $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
              if (!$link) {
                echo "連接失敗" . mysqli_connect_error();
              }
              mysqli_query($link, "set names utf8");
              $sql = "SELECT * FROM web_user_login where account = '$account' ";

              $result = mysqli_query($link, $sql);
              $record = mysqli_fetch_row($result)
              ?>
              <h3 class="sidebar-title"><i class="fas fa-star" style="font-size: 20px; color:#FFD306"></i>&nbsp;<b>已珍藏的房型<b></h3>
              <?
              if ($record[6] == '收藏') {
              ?>
                <center>
                  <div class="alert alert-warning" role="alert" style="text-align:center; width: 80%;">
                    <a href="blog_top1.php" style="color:	#796400;"> <? echo '超大豪華雙人房'; ?>&nbsp;&nbsp;<i class="fas fa-mouse-pointer"></i></a>
                  </div>
                </center>
              <? }
              if ($record[7] == '收藏') { ?>
                <center>
                  <div class="alert alert-warning" role="alert" style="text-align:center; width: 80%;">
                    <a href="blog_top2.php" style="color:	#796400;"><? echo '豪華雙人房'; ?>&nbsp;&nbsp;<i class="fas fa-mouse-pointer"></i></a>
                  </div>
                </center>
              <? }
              if ($record[8] == '收藏') { ?>
                <center>
                  <div class="alert alert-warning" role="alert" style="text-align:center; width: 80%;">
                    <a href="blog_top3.php" style="color:	#796400;"> <? echo '豪華單人房'; ?>&nbsp;&nbsp;<i class="fas fa-mouse-pointer"></i></a>
                  </div>
                </center>
              <? }
              if ($record[9] == '收藏') { ?>
                <center>
                  <div class="alert alert-warning" role="alert" style="text-align:center; width: 80%;">
                    <a href="blog_top4.php" style="color:	#796400;"> <? echo '豪華三人房'; ?>&nbsp;&nbsp;<i class="fas fa-mouse-pointer"></i></a>
                  </div>
                </center>
              <? } elseif ($record[6] != '收藏' & $record[7] != '收藏' & $record[8] != '收藏' & $record[9] != '收藏') {
              ?>
                <center>
                  <div class="alert alert-success" role="alert" style="text-align:center; width: 80%;">
                    <? echo '尚無收藏房型'; ?>&nbsp;&nbsp;<i class="far fa-sad-tear" style="font-size: 20px;"></i>
                  </div>
                </center>
              <? } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>


  <!-- 個人資料修改 -->
  <?
  if ($_SESSION['level'] <> "user") {
    header('location:login_user.php');
  } else {

    $method = "personal_update";
    $account = $_SESSION['account'];
    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

    $sql = "select * from web_user_login where account = $account";
    $rs = mysqli_query($link, $sql);

    if ($record3 = mysqli_fetch_assoc($rs)) {
      $name = $record3['name'];
      $phone = $record3['phone'];
      $mail = $record3['mail'];
      $acount = $record3['account'];
      $password = $record3['password'];
    }
  }
  ?>
  <form method="post" action="register_dblink.php">
    <input type=hidden name="method" value="<? echo $method ?>">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-wrench"></i>&nbsp;&nbsp;修改個人資料</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">姓名:</label>
                <input name="name" type="text" class="form-control" id="recipient-name" value="<? echo $name ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">帳號:</label>
                <input name="account" type="text" class="form-control" id="recipient-name" value="<? echo $account ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">密碼:</label>
                <input name="password" type="text" class="form-control" id="recipient-name" value="<? echo $password ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">電話:</label>
                <input name="phone" type="text" class="form-control" id="recipient-name" value="<? echo $phone ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">電子郵件:</label>
                <input name="mail" type="text" class="form-control" id="recipient-name" value="<? echo $mail ?>">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
            <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">確認修改</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- 訂房資料修改1 -->
  <?

  // if ($_SESSION['level'] <> "admin") {
  //   header('location:index.php?method=message&message=請先登入');
  // } else {

  // 接不到id??????????
  $method4 = "booked_update";
  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

  $sql = "select * from web_manager_data where id = '$id' ";
  $rs4 = mysqli_query($link, $sql);

  if ($record4 = mysqli_fetch_assoc($rs4)) {
    $id4 = $record4['id'];
    $account4 = $record4['account'];
    $name4 = $record4['name'];
    $room4 = $record4['room'];
    $date_in4 = $record4['date_in'];
    $date_out4 = $record4['date_out'];
    $pay4 = $record4['pay'];
    $coupon4 = $record4['coupon'];
    $price4 = $record4['price'];
  }

  // }
  ?>
  <form method="post" action="personal_booked_dblink.php">
    <input type=hidden name="method" value="<? echo $method4 ?>">
    <div class="modal fade" id="staticBackdrop_false" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-wrench"></i> 資料修改</h5><? echo 123;
                                                                                                    echo $id4; ?>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">

            <table class="table table-hover">
              <tbody>

                <td><input name="id" type="hidden" class="form-control" id="recipient-name" value="<? echo $id4 ?>"></td>

                <tr>
                  <th scope="row">1</th>
                  <td>訂房大名:</td>

                  <td><input name="name" type="text" class="form-control" id="recipient-name" value="<? echo $name4 ?>"></td>

                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>訂房帳號:</td>

                  <td><input name="account" type="text" class="form-control" id="recipient-name" value="<? echo $account4 ?>" readonly></td>

                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>入住房型:</td>

                  <td>
                    <select name="room" class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected><? echo $room4 ?></option>
                      <option value="超大豪華雙人房">超大豪華雙人房</option>
                      <option value="豪華雙人房">豪華雙人房</option>
                      <option value="豪華單人房">豪華單人房</option>
                      <option value="豪華三人房">豪華三人房</option>
                    </select>
                  </td>
                </tr>

                <tr>
                  <th scope="row">4</th>
                  <td>入住日期:</td>

                  <td><input name="date_in" type="date" class="form-control" id="recipient-name" value="<? echo $date_in4 ?>"></td>

                </tr>
                <tr>
                  <th scope="row">5</th>
                  <td>退房日期:</td>

                  <td><input name="date_out" type="date" class="form-control" id="recipient-name" value="<? echo $date_out4 ?>"></td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td>付款方式:</td>
                  <td>
                    <select name="pay" class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected><? echo $pay4 ?></option>
                      <option value="現場付款(含五倍卷)">現場付款(含五倍卷)</option>
                      <option value="郵局匯款">郵局匯款</option>
                      <option value="信用卡">信用卡</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td>使用優惠:</td>
                  <td>
                    <select name="coupon" class="form-select form-select-sm" aria-label=".form-select-sm example">
                      <option selected><? echo $coupon4 ?></option>
                      <option value="早鳥優惠">早鳥優惠</option>
                      <option value="五倍卷優惠">五倍卷優惠</option>
                      <option value="學生證優惠">學生證優惠</option>
                      <option value="首次入住享優惠">首次入住享優惠</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td>金額:</td>

                  <td><input name="price" type="text" class="form-control" id="recipient-name" value="$<? echo $price4 ?>" readonly></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
          </div>
        </div>
      </div>
    </div>
  </form>



  <!-- 可以取消訂房 -->
  <div class="modal fade" id="delet_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <span style="color:#FF0000"><b>確定要刪除此筆資料嗎?</b></span>
            <p>(刪除後將無法復原，需重新訂房。)</p>
          </div>
        </center>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">確定刪除</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 入住當天無法刪除 -->
  <div class="modal fade" id="staticBackdrop_delet" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel" style="color: #FF0000;">
            <div class="spinner-border text-danger" role="status">
              <span class="visually-hidden">Loading...</span>
            </div> 錯誤
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <center>
          <div class="modal-body">

            <br>
            很抱歉 !<span style="color:#FF0000"><b> 入住當天已無法取消</b>。</span>
            <p>任何疑問歡迎來電詢問，將有專人為您服務。</p>
            <p>( <i class="fas fa-phone"></i> : 02-2904-5537 )</p>
          </div>
        </center>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal_MONEY -->
  <div class="modal fade" id="staticBackdrop_money" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-exclamation-circle"></i> 價錢錯誤</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <br>

          <p>我們已收到您的價錢錯誤回報，待確認後將會通知您。</p>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
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