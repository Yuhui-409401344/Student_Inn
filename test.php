<?

$method = $_GET["method"];

switch ($method) {
  case "insert":
    include "insert.php";
    break;
  case "update":
    include "update.php";
    break;
  case "delete":
    include "delete.php";
    break;
  case "login":
    include "login.php";
    break;
  case "logout":
    include "logout.php";
    break;
  case "message":
    include "message.php";
    break;
  default:
    include "query.php";
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

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="public.php">公共設施</a></li>
          <li><a href="blog.php">房型一覽表</a></li>
          <li class="dropdown"><a href="#"><span>訂房專區</span> <i class="bi bi-chevron-down"></i></a>
            <ul>

              <li><a href="blog_top1.php">超大豪華雙人房</a></li>
              <li><a href="blog_top2.php">豪華雙人房</a></li>
              <li><a href="blog_top3.php">豪華單人房</a></li>
              <li><a href="blog_top4.php">豪華三人房</a></li>


            </ul>
          </li>
          <li><a href="early_bird_price.php">最新促銷方案</a></li>
          <li><a href="personal.php" class="active">個人資料</a></li>


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



                <!-- ======= 秘書室資料 ======= -->

                <h1 style="text-align: center;"><b><? echo  $_SESSION['name']; ?>貴賓，您好!</b></h1>
                <div class="accordion-item">




                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <!-- ======= 第一列 ======= -->
                    <button style="color:tomato; font-weight: bold; font-size: 20px;" class=" accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                      訂房編號001
                    </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body ccddnn">

                      <!-- ======= 第一列表格 ======= -->

                      <table class="table table-hover table-rwd" style="text-align: center;">
                        <thead>
                          <th colspan="2">
                            訂房編號001
                          </th>

                        </thead>
                        <tbody>
                          <tr class="tr-only-hide">
                            <th>訂房大名:</th>
                            <th><? echo  $_SESSION['name']; ?></th>
                          </tr>

                          <tr>
                            <th>房型:</th>
                            <th>超大豪華雙人房</th>
                          </tr>

                          <tr>
                            <th>預訂房數:</th>
                            <th>1間</th>
                          </tr>

                          <tr>
                            <th>入住日期:</th>
                            <th>2021.12.20</th>
                          </tr>

                          <tr>
                            <th>退房日期:</th>
                            <th>2021.12.22</th>
                          </tr>
                          <tr>
                            <th>使用優惠:</th>
                            <th>無</th>
                          </tr>
                          <tr>
                            <th>付款方式:</th>
                            <th>信用卡付款</th>
                          </tr>
                          <tr>
                            <th>價錢:</th>
                            <th>$3960</th>
                          </tr>






                          <!-- ======= 第一列(修改按鈕) ======= -->

                          <table>
                            <center>
                              <div class="btn-group" role="group" aria-label="Basic mixed styles example" data-bs-toggle="modal" data-bs-target="#staticBackdrop_false">
                                <button type="button" class="btn btn-success" style="font-size: 5px;">修改資料</button>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#staticBackdrop_delet">
                                <button type="button" class="btn btn-danger" style="font-size: 5px;">取消訂房</button>
                              </div>
                            </center>





                          </table>


                        </tbody>
                      </table>




                    </div>
                  </div>



                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <!-- ======= 第二列 ======= -->
                    <button style="color:tomato; font-weight: bold; font-size: 20px;" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                      訂房編號002
                    </button>
                  </h2>

                  <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                      <!-- ======= 第二列表格 ======= -->

                      <table class="table table-hover table-rwd" style="text-align: center;">
                        <thead>
                          <th colspan="2">
                            訂房編號002
                          </th>

                        </thead>
                        <tbody>
                          <tr class="tr-only-hide">
                            <th>訂房大名:</th>
                            <th>林鈺惠</th>
                          </tr>

                          <tr>
                            <th>房型:</th>
                            <th>豪華單人房</th>
                          </tr>

                          <tr>
                            <th>預訂房數:</th>
                            <th>1間</th>
                          </tr>

                          <tr>
                            <th>入住日期:</th>
                            <th>2022.1.20</th>
                          </tr>

                          <tr>
                            <th>退房日期:</th>
                            <th>2022.1.21</th>
                          </tr>
                          <tr>
                            <th>使用優惠:</th>
                            <th>五倍卷優惠</th>
                          </tr>
                          <tr>
                            <th>付款方式:</th>
                            <th>五倍卷付款</th>
                          </tr>
                          <tr>
                            <th>價錢:</th>
                            <th>$864</th>
                          </tr>






                          <!-- ======= 第二列(修改按鈕) ======= -->

                          <table>
                            <center>
                              <div class="btn-group" role="group" aria-label="Basic mixed styles example" data-bs-toggle="modal" data-bs-target="#change_2">
                                <button type="button" class="btn btn-success" style="font-size: 5px;">修改資料</button>
                              </div>
                              <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#delet_2">
                                <button type="button" class="btn btn-danger" style="font-size: 5px;">取消訂房</button>
                              </div>
                            </center>





                          </table>

                        </tbody>
                      </table>



                    </div>

                  </div>
                </div>


              </div>




              <div class="entry-content">



                <blockquote style="padding:5%;padding-top: 1%;">

                  <!-- ======= (回饋建議) ======= -->
                  <table>
                    <center>
                      <br>
                      <div class="reply-form">
                        <h4>回饋與建議</h4>
                        <form action="">
                          <div class="row">
                            <div class="col form-group ">
                              <textarea name="comment" class="form-control" placeholder="請寫下此次訂房的建議，幫助我們提供更好的服務!"></textarea>
                            </div>
                          </div>
                          <br>

                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedback">
                            送出
                          </button>
                          <?php
                          echo $id;
                          ?>


                        </form>

                      </div>
                    </center>
                  </table>


                </blockquote>





              </div>

            </article><!-- End blog entry -->



          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <?

              $link = mysqli_connect("localhost", "root", "12345678", "user_webfinal");
              $sql = "select * from web_user_login";

              $rs = mysqli_query($link, $sql);


              ?>


              <h3 class="sidebar-title"><i class="fas fa-info-circle"></i> 個人資料</h3>
              <div class="sidebar-item categories">
                <table class="table table-hover">
                  <tbody>
                    <?
                    while ($record = mysqli_fetch_row($rs)) {
                    ?>
                      <tr>

                        <td>姓名:</td>
                        <td>
                          <? echo $record[1] ?>
                        </td>

                      </tr>
                      <tr>

                        <td>帳號:</td>
                        <td>
                          <? echo $record[4] ?>
                        </td>

                      </tr>
                      <tr>
                        <td>電話:</td>
                        <td>
                          <? echo $record[2] ?>
                        </td>
                      </tr>
                      <tr>

                        <td>電子信箱:</td>
                        <td>
                          <? echo $record[3] ?>
                        </td>

                      </tr>
                    <?
                    }

                    mysqli_close($link);
                    ?>





                  </tbody>
                </table>
              </div><!-- End sidebar categories-->





              <!--修改資料按鈕-->
              <center>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">修改</button>
              </center>





              <br>




              <h3 class="sidebar-title"><i class="fas fa-bell"></i>&nbsp;訂房注意事項</h3>
              <div class="sidebar-item tags">
                <center>
                  <ul>
                    <li><a><i class="fas fa-user-clock"></i>&nbsp;&nbsp;年齡限制 : <div>須年滿 18 歲才能辦理入住</div></a></li>
                    <li><a><i class="fas fa-paw"></i>&nbsp;&nbsp;寵物 : <div>不允許攜帶寵物入住</div></a></li>
                    <li><a><i class="fas fa-bed"></i>&nbsp;&nbsp;加床選項 : <div>此住宿無法提供加床</div></a></li>
                    <li><a><i class="fas fa-hand-sparkles"></i>&nbsp;&nbsp;清潔服務 : <div>每日定時清潔</div></a></li>
                    <li><a><i class="fas fa-blind"></i>&nbsp;&nbsp;無障礙設施 : <div>無障礙坡道及電梯</div></a></li>

                  </ul>
                </center>

                <div class="alert alert-success" role="alert" style="width: 100%;">
                  <i class="far fa-credit-card"></i>&nbsp;&nbsp;提供信用卡分期付款
                </div>

                <div class="alert alert-danger" role="alert" style="width: 100%;">
                  <i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;若疫情進入三級警戒，將實施人流管控
                </div>
              </div><!-- End sidebar tags-->

              <br>



            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->


  </main><!-- End #main -->


  <!-- 個人資料修改 -->
  <?
  $method = "update";
  $id = $_GET['id'];
  $link = mysqli_connect("localhost", "root", "12345678", "user_webfinal");

  $sql = "select * from web_user_login where";
  $rs = mysqli_query($link, $sql);


  if ($record = mysqli_fetch_assoc($rs)) {
    $name = $record['name'];
    $phone = $record['phone'];
    $mail = $record['mail'];
    $account = $record['account'];
  }
  ?>
  <form method="post" action="dblink.php">
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
                <label for="recipient-name" class="col-form-label">帳號:</label>
                <input type="text" class="form-control" id="recipient-name" value="<? echo $account ?>" readonly>
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">姓名:</label>
                <input type="text" class="form-control" id="recipient-name" value="<? echo $name ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">電話:</label>
                <input type="text" class="form-control" id="recipient-name" value="<? echo $phone ?>">
              </div>
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label">電子郵件:</label>
                <input type="text" class="form-control" id="recipient-name" value="<? echo $mail ?>">
              </div>


            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
            <button type="submit" class="btn btn-danger">確認修改</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  <!-- 訂房資料修改1 -->
  <div class="modal fade" id="staticBackdrop_false" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-wrench"></i> 資料修改</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <table class="table table-hover">
            <tbody>
              <tr>
                <td colspan="4" style="color: 	#FF5809;">
                  <h5><strong>林鈺惠貴賓，您好。</strong></h5>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>入住房型:</td>
                <td>超大豪華雙人房</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">超大豪華雙人房</option>
                    <option value="2">豪華雙人房</option>
                    <option value="3">豪華單人房</option>
                    <option value="3">豪華三人房</option>
                  </select>
                </td>
              </tr>
              <th scope="row">2</th>
              <td>預訂房數:</td>
              <td>1</td>
              <td>
                <div class="input-group mb-3">
                  <span style=" height:30px;" class="input-group-text" id="basic-addon1">@</span>
                  <input type="text" style="width:8px; height:30px;" class="form-control" placeholder="重新輸入" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
              <tr>
                <th scope="row">3</th>
                <td>入住日期:</td>
                <td>2021年12月20日</td>
                <td><input class="form-select form-select-sm" id="date" type="date"></td>

              </tr>
              <tr>
                <th scope="row">4</th>
                <td>退房日期:</td>
                <td>2021年12月22日</td>
                <td><input class="form-select form-select-sm" id="date" type="date"></td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>使用優惠:</td>
                <td>無</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">早鳥優惠</option>
                    <option value="2">五倍卷優惠</option>
                    <option value="3">學生證優惠</option>
                    <option value="4">首次入住享優惠</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>付款方式:</td>
                <td>信用卡付款</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">現場付款(含五倍卷)</option>
                    <option value="2">郵局匯款</option>
                    <option value="3">信用卡</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>連絡電話:</td>
                <td>09-12345678</td>
                <td>
                  <div class="input-group mb-3">
                    <span style=" height:30px;" class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" style="width:8px; height:30px;" class="form-control" placeholder="重新輸入" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row">8</th>
                <td>電子信箱:</td>
                <td>*****@gmail.com</td>
                <td>
                  <div class="input-group mb-3">
                    <span style=" height:30px;" class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" style="width:8px; height:30px;" class="form-control" placeholder="重新輸入" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </td>
              </tr>

              <tr>
                <th scope="row"><i class="fas fa-exclamation-triangle"></i></th>
                <td>總價:</td>
                <td>$3,960</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#staticBackdrop_money">
                    <button type="button" class="btn btn-danger" style="font-size: 4px;">回報錯誤</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 訂房資料修改2 -->
  <div class="modal fade" id="change_2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-wrench"></i> 資料修改</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <table class="table table-hover">
            <tbody>
              <tr>
                <td colspan="4" style="color: 	#FF5809;">
                  <h5><strong>林鈺惠貴賓，您好。</strong></h5>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>入住房型:</td>
                <td>豪華單人房</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">超大豪華雙人房</option>
                    <option value="2">豪華雙人房</option>
                    <option value="3">豪華單人房</option>
                    <option value="3">豪華三人房</option>
                  </select>
                </td>
              </tr>
              <th scope="row">2</th>
              <td>預訂房數:</td>
              <td>1</td>
              <td>
                <div class="input-group mb-3">
                  <span style=" height:30px;" class="input-group-text" id="basic-addon1">@</span>
                  <input type="text" style="width:8px; height:30px;" class="form-control" placeholder="重新輸入" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </td>
              <tr>
                <th scope="row">3</th>
                <td>入住日期:</td>
                <td>2022年1月20日</td>
                <td><input class="form-select form-select-sm" id="date" type="date"></td>

              </tr>
              <tr>
                <th scope="row">4</th>
                <td>退房日期:</td>
                <td>2022年1月22日</td>
                <td><input class="form-select form-select-sm" id="date" type="date"></td>
              </tr>

              <tr>
                <th scope="row">5</th>
                <td>使用優惠:</td>
                <td>五倍卷優惠</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">早鳥優惠</option>
                    <option value="2">五倍卷優惠</option>
                    <option value="3">學生證優惠</option>
                    <option value="4">首次入住享優惠</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>付款方式:</td>
                <td>現場付款(含五倍卷)</td>
                <td>
                  <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>正確</option>
                    <option value="1">現場付款(含五倍卷)</option>
                    <option value="2">郵局匯款</option>
                    <option value="3">信用卡</option>
                  </select>
                </td>
              </tr>



              <tr>
                <th scope="row"><i class="fas fa-exclamation-triangle"></i></th>
                <td>總價:</td>
                <td>$864</td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料" data-bs-toggle="modal" data-bs-target="#staticBackdrop_money">
                    <button type="button" class="btn btn-danger" style="font-size: 4px;">回報錯誤</button>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
        </div>
      </div>
    </div>
  </div>

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

  <!-- 回饋 -->
  <div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="feedback" style="color: #FF0000;"><i class="fas fa-check-circle"></i>&nbsp;&nbsp;<b>完成</b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="text-align: center; letter-spacing: 2px;">
          感謝您的回覆，期待您有美好的入住體驗!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
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