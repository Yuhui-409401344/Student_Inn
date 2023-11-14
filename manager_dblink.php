<?
$method = $_POST['method'];
$id = $_POST["id"];
$name = $_POST["name"];
$room = $_POST["room"];
$date_in = $_POST["date_in"];
$date_out = $_POST["date_out"];
$pay = $_POST["pay"];
$coupon = $_POST["coupon"];
$price = $_POST["price"];
$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

if ($method == "manager_update")  {
    $sql = "update web_manager_data set name = '$name', room='$room', date_in='$date_in', date_out='$date_out',
    pay = '$pay', coupon = '$coupon', price = '$price' where  id = '$id'  ";
   

   
    if (mysqli_query($link, $sql)) {
        
        header('location:booked.php');
   
    }
}
// else{
//     $sql = "update web_manager_data set name = '$name', room='$room', date_in='$date_in', date_out='$date_out',
//     pay = '$pay', coupon = '$coupon', price = '$price' where id='$id'";
//     echo 2;

   
//     if (mysqli_query($link, $sql)) {
//         // header('location:booked.php');
//         echo 3;
//     }
// }
?>