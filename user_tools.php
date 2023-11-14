  <?
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
        $level = $record3['level'];
    }
    ?>
    <?php
    if ($level == "user") {
    ?>
      <!-- ======= 顧客顯示的導覽列 ======= -->
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
                      <li><a href="優惠_view.php">最新促銷方案</a></li>
                      <li><a href="personal.php">個人資料</a></li>
                      <li><a href="user_comment.php">評論專區</a></li>
                       <!-- 只顯示名字，不顯示姓氏 -->
                      <li><a class="getstarted" href="user_logout.php"><? echo  "嗨 ! " . substr($name, 3) ?>&nbsp;&nbsp;登出</a></li>
                  </ul>
                  <i class="bi bi-list mobile-nav-toggle"></i>
              </nav>
          </div>
      </header>
    <?
    } 
    else {
    ?>
     <!-- 管理者登入的導覽列 -->
 <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><img src="assets/img/Logo.png" style="border-radius: 10px;"></img>&nbsp;&nbsp;SCHOLAR'S INN</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="booked.php">顧客訂房一覽表</a></li>
          <li><a href="manager_comment.php">顧客評論專區</a></li>
          <li><a href="news.php">促銷公告修改</a></li>
          <li><a href="report.php">營運報表</a></li>
          <!-- 只顯示名字，不顯示姓氏 -->
          <li><a class="getstarted" href="user_logout.php"><? echo  "嗨 ! ".substr($_SESSION['name'], 3)?>&nbsp;&nbsp;登出</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>
  <? } ?>
