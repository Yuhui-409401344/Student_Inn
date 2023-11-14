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

  <title>豪華三人房入住狀況、營收</title>


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

      <div class="container">


        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10" style="margin-top: 50px;">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">

              <center>
                <h1><b>豪華三人房入住狀況、營收</b></h1>
                <br>
              </center>
              <div style="padding-left: 8%;padding-right: 8%;">
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', { 'packages': ['table'] });
                  google.charts.setOnLoadCallback(drawTable);

                  function drawTable() {
                    var data = new google.visualization.DataTable();
                    data.addColumn('string', '日期');
                    data.addColumn('number', '已售出房數(共10間)');
                    data.addColumn('boolean', '是否有空房?');
                    data.addRows([
                      ['2020年1月', { f: '9' }, true],
                      ['2020年2月', { f: '8' }, true],
                      ['2020年3月', { f: '10' }, false],
                      ['2020年4月', { f: '10' }, false],
                      ['2020年5月', { f: '8' }, true],
                      ['2020年6月', { f: '7' }, true],
                      ['2020年7月', { f: '5' }, true],
                      ['2020年8月', { f: '10' }, false],
                      ['2020年9月', { f: '9' }, true],
                      ['2020年10月', { f: '10' }, false],
                      ['2020年11月', { f: '8' }, true],
                      ['2020年12月', { f: '9' }, true]
                    ]);

                    var table = new google.visualization.Table(document.getElementById('table_div'));

                    table.draw(data, { showRowNumber: true, width: '60%', height: '100%' });
                  }
                </script>

                <center>
                  <div id="table_div"></div>
                </center>




                <br>

                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                  google.charts.load('current', { 'packages': ['corechart'] });
                  google.charts.setOnLoadCallback(drawChart);

                  function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                      ['月份', '營收(單位:萬)'],
                      ['1月', 17],
                      ['2月', 15],
                      ['3月', 16],
                      ['4月', 14],
                      ['5月', 15],
                      ['6月', 17],
                      ['7月', 14],
                      ['8月', 16],
                      ['9月', 17],
                      ['10月', 14],
                      ['11月', 17],
                      ['12月', 16]
                    ]);

                    var options = {
                      title: '2020年豪華三人房各月營收圖',
                      curveType: 'function',
                      legend: { position: 'bottom' }
                    };

                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                    chart.draw(data, options);
                  }
                </script>

                <div id="curve_chart" style="width: 600px; height: 250px"></div>



            </form>
          </div>

        </div>


      </div>


    </section><!-- End About Section -->


  </main><!-- End #main -->












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