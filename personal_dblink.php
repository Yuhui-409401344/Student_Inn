<?
$method = $_POST["method"];
$id = $_POST["id"];

$name = $_POST["name"];
$room = $_POST['room'];
$date_in = $_POST["date_in"];
$date_out = $_POST["date_out"];
$pay = $_POST["pay"];
$coupon = $_POST["coupon"];
$price = $_POST["price"];
$account = $_POST["account"];

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");


// if ($method == "booked_insert") {
   
//     $sql = "insert into web_manager_data
//      (name, room, date_in, date_out, pay, coupon,account,price) values
//      ('$name','$room', '$date_in','$date_out', '$pay','$coupon','$account',$price)";
    
   
//     if (mysqli_query($link, $sql)) {
//         header('location:personal.php');
       
//     }
// } 

if ($method == "personal_update") {
    $sql = "update web_manager_data set
     name = '$name', date_in='$date_in', date_out='$date_out', pay='$pay', coupon='$coupon' where id='$id'";
    
    if (mysqli_query($link, $sql)) {
 
        header('location:personal.php');
    }
}
?>