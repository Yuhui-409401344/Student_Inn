<?
if ($_SESSION['level'] <> "admin") {
    header('location:login_user.php');
} 


else{


$id = $_GET["id"];

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$sql = "delete from web_manager_data where id = '$id'";

if (mysqli_query($link, $sql)) {
    
    header('location:booked.php');
} else {
    header('location:booked.php');
}
}
