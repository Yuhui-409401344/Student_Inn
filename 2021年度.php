<?php

if ($_SESSION['level'] <> "admin") {
    header('location:login_user.php');
}

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

if (!$link) {
  echo "連接失敗" . mysqli_connect_error();
}

mysqli_query($link, "set names utf8");


$sql = "SELECT * FROM income";

$result = mysqli_query($link, $sql);
$result2 = mysqli_query($link, $sql);
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

  <title>2021年度入住狀況營收</title>


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

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>




  <main id="main" style="margin-top: 0;padding: 0; height:100%;">


    <!-- ======= 更改Input ======= -->

    <section id="about" class="about">



      <!-- 填寫 -->

      <div class="container">



        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10" style="margin-top: 50px;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">



              <center>
                <h1><b>2021年度入住狀況營收</b></h1>
                <br><br><br>
              </center>
              <div style="width: 44%; display: flex; flex-direction: row;">

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load("current", {
                    packages: ["corechart"]
                  });
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['月份', '比例'],

                      <?php

                      while ($record = mysqli_fetch_row($result)) {
                      ?>

                        ['<? echo $record[1] ?>', <? echo $record[2] ?>],
                      <? } ?>
                     

                    ]);

                    var options = {
                      title: '2021年度入住營收比例圖',
                      pieHole: 0.4,
                    };

                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                    chart.draw(data, options);
                  }
                </script>
                <div id="donutchart" style="width: 600px; height: 250px;"></div>










                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <div id="chart_div"></div>
                <br><br><br><br>
                <script>
                  google.charts.load('current', {
                    packages: ['corechart', 'bar']
                  });
                  google.charts.setOnLoadCallback(drawBarColors);

                  function drawBarColors() {
                    var data = google.visualization.arrayToDataTable([
                      ['年分', '2020年', '2021年'],
                   
                      <?php

                      while ($record2 = mysqli_fetch_row($result2)) {
                      ?>
                      ['<? echo $record2[1] ?>', <? echo $record2[3] ?> , <? echo $record2[4] ?>],
                      <? } ?>
                    
                    ]);

                    var options = {
                      title: '2020/2021年度入住營收總額',
                      chartArea: {
                        width: '35%'
                      },
                      colors: ['#b0120a', '#ffab91'],
                      hAxis: {
                        title: '總額',
                        minValue: 0
                      },
                      vAxis: {
                        title: '時間'
                      }
                    };
                    var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
                    chart.draw(data, options);
                  }
                </script>


            </form>
          </div>

        </div>

      </div>


    </section><!-- End About Section -->


  </main><!-- End #main -->

















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