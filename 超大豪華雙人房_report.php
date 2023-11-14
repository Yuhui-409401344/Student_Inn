<?
if ($_SESSION['level'] <> "admin") {
  header('location:login_user.php');
} else {
  $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
  if (!$link) {
    echo "連接失敗" . mysqli_connect_error();
  }
  mysqli_query($link, "set names utf8");
  $sql = "select * from big";
  $result = mysqli_query($link, $sql);
  $result2 = mysqli_query($link, $sql);
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

  <title>超大豪華雙入住狀況、營收</title>


  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>
  <main id="main" style="margin-top: 0;padding: 0;">
    <section id="about" class="about">
      <div class="container">
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10" style="margin-top: 50px;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <center>
                <h1><b style="color: #94c045;">超大豪華雙人房</b></h1>
                <h2><b>2021年度入住狀況、營收</b></h2>
                <br>
              </center>
              <div style="padding-left: 8%;padding-right: 8%;">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', {
                    'packages': ['table']
                  });
                  google.charts.setOnLoadCallback(drawTable);

                  function drawTable() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', '月份');
                    data.addColumn('number', '累積售出房數');
                    data.addRows([
                      <?php
                      while ($record = mysqli_fetch_row($result)) {
                      ?>
                      ['<? echo $record[1] ?>', {
                          f: '<? echo  $record[2] ?>'
                       }],
                      <? }
                      ?>
                    ]);

                    var table = new google.visualization.Table(document.getElementById('table_div'));
                    table.draw(data, {
                      showRowNumber: true,
                      width: '50%',
                      height: '100%'
                    });
                  }
                </script>
                <center>
                  <div id="table_div"></div>
                </center>
                <br>
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', {
                    'packages': ['corechart']
                  });
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['月份', '營收(單位:萬)'],
                      <?php
                      while ($record2 = mysqli_fetch_row($result2)) {
                      ?>
                      ['<? echo $record2[1] ?>', <? echo $record2[3] ?>],
                      <? } ?>
                    ]);

                    var options = {
                      title: '2020年超大豪華雙人房各月營收圖',
                      curveType: 'function',
                      legend: {
                        position: 'bottom'
                      }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);
                  }
                </script>
                <div id="curve_chart" style="width: 700px; height: 250px"></div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>














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