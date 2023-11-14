<?
if ($_SESSION['level'] <> "admin") {
    header('location:login_user.php');
  } else {


$id = $_GET["id"];

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$sql = "delete from web_manager_coupon where id = '$id'";


if (mysqli_query($link, $sql)) {
    
    header('location:news.php');
} else {
    header('location:news.php');
}


}