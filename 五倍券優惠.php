<!DOCTYPE html>
<html lang="en">

<head>
  <!--引用icon-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
    crossorigin="anonymous"></script>

  <!--引用css-->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />



  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>五倍券優惠修改</title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
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

 


  <main id="main" style="margin-top: 0;padding: 0;">


  <!-- ======= 更改Input ======= -->
  
  <section id="about" class="about">
   

     
      <!-- 填寫 -->
    
      <div class="container" >



        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10" style="margin-top: 30px;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" >

              <center>
                <h1>修改<b  style="color:#94c045;">五倍券優惠方案</b>的資料</h1>
                <table style="width:90%;">

                  <tr>
                    <td style="width: 50%;padding: 15px;">
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>入住房型選擇</option>
                        <option value="1">超大豪華雙人房</option>
                        <option value="2">豪華雙人房</option>
                        <option value="3">豪華單人房</option>
                        <option value="3">豪華三人房</option>
                      </select>
                    </td>
                    
                    
                    <td style="width: 50%;padding: 15px;">
                      <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>平日&假日選擇</option>
                        <option value="1">平日</option>
                        <option value="2">假日</option>
                      </select>
                    </td>
                  </tr>
                <tr>
                  <tr>
                    <td  style="width: 50%; padding: 15px;">
                      <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">原價</span>
                        <input type="text" class="form-control" placeholder="輸入原價" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                    </td>
                  
                  
                  <td  style="width: 50%; padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">促銷折扣</span>
                      <input type="text" class="form-control" placeholder="ex.八折請輸入0.8" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td  style="width: 50%; padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">優惠開始</span>
                      <input type="date" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                  
                  
                  <td  style="width: 50%;padding: 15px;">
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1">優惠結束</span>
                      <input type="date" class="form-control" placeholder="輸入更改資料" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                  </td>
                </tr>


                <tr>
                  <td  style="width: 50%; padding: 15px;" colspan="2">
                    <div class="input-group">
                      <span class="input-group-text">方案內文</span>
                      <textarea class="form-control" aria-label="With textarea"></textarea>
                    </div>
                  </td>
                  
                  
                </tr>

               
                  
     
                
                <tr>
                  <td style="width: 50%;padding: 15px;">
                    <center><div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料"
                    data-bs-toggle="modal" data-bs-target="#delet_fix">
                    <button type="button" class="btn btn-danger" style="font-size: 5px;">刪除此方案</button>
                    </div></center>
                  </td>
                  
                  
                  <td style="width: 50%;padding: 15px;">
                    <center><div class="btn-group" role="group" aria-label="Basic mixed styles example" title="取消後將刪除此筆資料"
                      data-bs-toggle="modal" data-bs-target="#sure_fix">
                      <button type="button" class="btn btn-success" style="font-size: 5px;">確定修改</button>
                      </div></center>
                  </td>
                </tr>


                

                
              </table></center>

            </form>
          </div>

        </div>

      </div>
    
   
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
      
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">確定</button>
    </div>
  </div>
</div>
</div>

 

  

 
  
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