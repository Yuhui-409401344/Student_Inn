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

  <title>超大豪華雙人房</title>
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

          <h2>超大豪華雙人房</h2>
          <p>Double Room</p>

        </div>
      </div>
      <div class="container">
        <ol>
          <li><a href="index.php">首頁</a></li>
          <li><a href="blog.php">住房一覽表</a></li>
          <li>超大豪華雙人房</li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-8 entries">
            <article class="entry entry-single">
              <div class="entry-img">
                <img src="assets/img/pingtung/尊榮套房_2.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="blog_top1.php">超大豪華雙人房</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="fas fa-user-friends"></i> <a href="blog-single.php">&nbsp;雙人房</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.php"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                </ul>
              </div>
              <p>
              </p>
              <div class="entry-content">
                <blockquote style="padding:5%;padding-top: 1%;">
                  <h3 style="text-align: left;">入住時間:&nbsp;&nbsp;&nbsp;15:00-20:00</h3>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%; background-color: #E0E0E0;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%; " aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">15:00-20:00</div>
                    <div class="progress-bar" role="progressbar" style="width: 10%; background-color: #E0E0E0;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <br>
                  <h3 style="text-align: left;">退房時間:&nbsp;&nbsp;&nbsp;11:00</h3>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 35%; background-color: #E0E0E0;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 10%; " aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">11:00</div>
                    <div class="progress-bar" role="progressbar" style="width: 55%; background-color: #E0E0E0;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>


                </blockquote>

                <p>
                  <i class="fas fa-person-booth"></i>&nbsp;享受獨立空間，不受其他房客影響，提供最佳入住品質。
                </p>


                <h3>高級獨立陽台</h3>
                <p><i class="fas fa-check"></i>&nbsp;提供獨立洗衣機及曬衣架。</p>

                <img src="assets/img/pingtung/陽台.jpg" class="img-fluid" alt="">
                <br>

                <h3>高級獨立衛浴</h3>
                <p><i class="fas fa-check"></i>&nbsp;設有兩個獨立洗手台、超大鏡面級浴缸。</p>
                <img src="assets/img/pingtung/bathroom_3.jpg" class="img-fluid" alt="">
                <br><br>
                <p><i class="fas fa-check"></i>&nbsp;採分離式廁所。</p>
                <img src="assets/img/pingtung/bathroom_2.jpg" class="img-fluid" alt="">
                <br><br>





                <h3><i class="fas fa-bookmark"></i>&nbsp;訂房價格</h3>
                <br>





                <div class="accordion" id="accordionPanelsStayOpenExample" style="box-shadow: 3px 3px 3px 3px	#F0F0F0">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <strong>查看平日訂房價格:</strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                      <div class="accordion-body">



                        <table class="table table-hover">
                          <thead>
                            <tr>

                              <th scope="col">房型</th>
                              <th scope="col">價格/1間</th>
                              <th scope="col">限制</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>超大豪華雙人房</td>
                              <td><b>$1880</b></td>
                              <td>平日訂房&nbsp;&nbsp;
                                <span style="color:red; letter-spacing: 2px;">(<i class="fas fa-exclamation-triangle"></i>星期五、六、日為假日)</span>
                              </td>
                            </tr>

                          </tbody>
                        </table>




                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <strong>查看假日及國定假日訂房價格:</strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                      <div class="accordion-body">

                        <table class="table table-hover" style="text-align: center;">
                          <thead>
                            <tr>

                              <th scope="col">房型</th>
                              <th scope="col">價格/1間</th>
                              <th scope="col">限制</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>超大豪華雙人房</td>
                              <td><b>$2580</b></td>
                              <td>假日訂房&nbsp;&nbsp;
                                <span style="color:red; letter-spacing: 2px;">(<i class="fas fa-exclamation-triangle"></i>含星期五、國定假日)</span>
                              </td>
                            </tr>

                          </tbody>
                        </table>



                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <strong>專屬優惠:</strong>
                      </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                      <div class="accordion-body">


                        <table class="table" style="text-align: center;">
                          <thead>
                            <tr>
                              <th scope="col">早鳥優惠</th>
                              <th scope="col">五倍卷優惠</th>
                              <th scope="col">學生證惠</th>
                              <th scope="col">首次入住優惠</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>即日起~2021/12/31</td>
                              <td>即日起~2022/4/30</td>
                              <td>無截止日</td>
                              <td>無截止日</td>
                            </tr>


                          </tbody>
                        </table>



                      </div>
                    </div>
                  </div>
                </div>


                <br>


              </div>


            </article>

            <div class="blog-author d-flex align-items-center">
              <center>
                <div>
                  <h4>備註:</h4>
                  <div class="social-links">


                    <br>
                    <table>
                      <tr>
                        <td>&nbsp;&nbsp;<i class="fas fa-smoking-ban" style="color:#008037;"></i>&nbsp;&nbsp;禁菸客房&nbsp;&nbsp;&nbsp;</td>
                        <td><i class="fas fa-parking" style="color:#008037;"></i>&nbsp;&nbsp;提供付費停車位&nbsp;&nbsp;&nbsp;
                        </td>
                        <td><i class="fas fa-bed" style="color:#008037;"></i>&nbsp;&nbsp;加大床型&nbsp;&nbsp;&nbsp;</td>
                        <td><i class="fas fa-temperature-low" style="color:#008037;"></i>&nbsp;&nbsp;房間付冷氣&nbsp;&nbsp;&nbsp;</td>

                        <td><i class="fas fa-wifi" style="color:#008037;"></i>&nbsp;&nbsp;無限wifi&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                    </table>


                    <br>
                    <p style="margin-left: 10px;">
                      設有24小時櫃台服務和公共交誼廳。健身房和團體討論室正在規劃中，預計年底全面開放。
                    </p>

                  </div>

                </div>
            </div>
            </center>
          </div>
          <form method="post" action="personal_booked_dblink.php">
            <?
            $method = "booked_insert";
            $id = "";
            $name = "";
            $date_in = "";
            $date_out = "";
            $coupon = "";
            $pay = "";
            $price = "";
            $account = $_SESSION['account'];
            ?>
            <input type=hidden name="method" value="<? echo $method ?>">
            <input type=hidden name="id" value="<? echo $id ?>">
            <div class="col-lg-4">

              <div class="sidebar">
                <h3 class="sidebar-title"><i class="fas fa-bookmark"></i> 立即訂房</h3>
                <div class="sidebar-item categories">
                  <table class="table table-hover">
                    <tbody>
                      </tr>
                      <tr>
                        <td>訂房大名:</td>
                        <td>
                          <input name="name" type="text" class="form-control" id="recipient-name" value="<? echo $name ?>">
                        </td>
                      </tr>
                      <tr>
                        <td>入住房型:</td>
                        <td>
                          <select name="room" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="<? echo $room ?>" selected></option>
                            <option value="超大豪華雙人房">超大豪華雙人房</option>
                            <option value="豪華雙人房">豪華雙人房</option>
                            <option value="豪華單人房">豪華單人房</option>
                            <option value="豪華三人房">豪華三人房</option>
                          </select>
                        </td>
                      <tr>
                        <td>入住日期:</td>
                        <td><input name="date_in" type="date" value="<? echo $date_in ?>" class="form-select form-select-sm" id="date"></td>
                      </tr>
                      <tr>
                        <td>退房日期:</td>
                        <td><input name="date_out" type="date" value="<? echo $date_out ?>" class="form-select form-select-sm" id="date"></td>
                      </tr>
                      <tr>
                        <td>使用優惠:</td>
                        <td>
                          <select name="coupon" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="<? echo $coupon ?>" selected></option>
                            <option value="早鳥優惠">早鳥優惠</option>
                            <option value="五倍卷優惠">五倍卷優惠</option>
                            <option value="學生證優惠">學生證優惠</option>
                            <option value="首次入住享優惠">首次入住享優惠</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>付款方式:</td>
                        <td>
                          <select name="pay" class="form-select form-select-sm" aria-label=".form-select-sm example">
                            <option value="<? echo $pay ?>" selected></option>
                            <option value="現場付款(含五倍卷)">現場付款(含五倍卷)</option>
                            <option value="郵局匯款">郵局匯款</option>
                            <option value="信用卡">信用卡</option>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td>價錢:</td>
                        <td>
                          <input name="price" value="<? echo $price ?>" type="text" class="form-control" id="recipient-name" value="<? echo $name ?>">

                        </td>
                      </tr>
                      <tr>
                        <td>帳號:</td>
                        <td>
                          <input name="account" value="<? echo $account ?>" type="text" class="form-control" id="recipient-name" value="<? echo $name ?>" readonly>

                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- End sidebar categories-->

                <!--確認訂房按鈕-->
                <center>
                  <div class="btn-group" role="group" aria-label="Basic mixed styles example" title="" data-bs-toggle="modal" data-bs-target="#staticBackdrop_sure">
                    <button type="button" class="btn btn-danger" style="font-size: 4px;">確認訂房</button>
                  </div>
                </center>

                <br>
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


                <h3 class="sidebar-title"><i class="fas fa-bed"></i> 其他房型</h3>
                <div class="sidebar-item recent-posts">
                  <div class="post-item clearfix">
                    <img src="assets/img/pingtung/尊榮套房_2.jpg" alt="">
                    <h4><a href="blog_top1.php">超大豪華雙人房(含陽台)</a></h4>
                    <time>剩餘空房0間 (共2間)</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/pingtung/one_bed.jpg" alt="">
                    <h4><a href="blog_top2.php">豪華雙人房</a></h4>
                    <time>剩餘空房5間 (共21間)</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/pingtung/one_bed4.jpg" alt="">
                    <h4><a href="blog_top3.php">豪華單人房</a></h4>
                    <time>剩餘空房8間 (共35間)</time>
                  </div>

                  <div class="post-item clearfix">
                    <img src="assets/img/pingtung/three_bed.jpg" alt="">
                    <h4><a href="blog_top4.php">豪華三人房</a></h4>
                    <time>剩餘空房2間 (共10間)</time>
                  </div>



                </div><!-- End sidebar recent posts-->



              </div>

            </div>

        </div>

      </div>
    </section>


  </main>








  <!-- sure -->
  <div class="modal fade" id="staticBackdrop_sure" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-check-circle"></i> 訂房成功</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <center>
          <div class="modal-body">
            <br>
            <h3><strong>訂房成功 !</strong></h3>
            <p>可至 <span style="color:#2894FF;"><b>"個人資料"</b></span>確認資料無誤，感謝您的配合!</p>

          </div>
        </center>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
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
  </form>
</body>

</html>