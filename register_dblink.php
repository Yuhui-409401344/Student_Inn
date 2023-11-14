<?

if ($_SESSION['level'] <> "user") {
    header('location:login_user.php');
}

$method = $_POST["method"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$account = $_POST["account"];
$password = $_POST["password"];
$level = $_POST["level"];
$超大豪華雙人房 = $_POST["超大豪華雙人房"];
$豪華雙人房 = $_POST["豪華雙人房"];
$豪華三人房 = $_POST["豪華三人房"];
$豪華單人房 = $_POST["豪華單人房"];
$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
// 新增帳號
if ($method == "register") {
    $sql = "insert into web_user_login
     (name, phone, mail, account, password, level, 超大豪華雙人房,豪華雙人房,豪華三人房,豪華單人房) values
     ('$name', '$phone','$mail', '$account','$password','$level','$超大豪華雙人房','$豪華雙人房','$豪華三人房','$豪華單人房')";
   
    if (mysqli_query($link, $sql)) {
        header('location:login_user.php');
    }
} 
// 修改帳號資料
else {
    $sql = "update web_user_login set
     name = '$name', phone='$phone', mail='$mail', password='$password' where account='$account'";
    
    if (mysqli_query($link, $sql)) {
        header('location:personal.php');
    }
}
?>
