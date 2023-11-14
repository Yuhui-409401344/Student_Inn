<?
session_start();
$account = $_POST["account"];
$password = $_POST["password"];
$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$sql = "select * from web_user_login where account = '$account'";
$rs = mysqli_query($link, $sql);

if ($record = mysqli_fetch_assoc($rs)) {
  if ($password == $record['password']) {

    $_SESSION['id'] = $record['id'];
    $_SESSION['name'] = $record['name'];
    $_SESSION['phone'] = $record['phone'];
    $_SESSION['mail'] = $record['mail'];
    $_SESSION['account'] = $record['account'];
    $_SESSION['password'] = $record['password'];
    $_SESSION['level'] = $record['level'];
   
    if($_SESSION['level']=='user'){
       header('location:public.php');
    }
    else{
      header('location:booked.php');
    }
   
  } else {
    $error = "密碼錯誤";
    header("location:login_user.php?error=$error");
  }
} else if (mysqli_num_rows($rs) == 0) {
  $error = "帳號不存在";
  header("location:login_user.php?error=$error");
}
?>
