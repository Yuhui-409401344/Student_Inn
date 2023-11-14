<?
$method = $_POST["method"];
$id = $_POST["id"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];
$account = $_POST["account"];
$password = $_POST["password"];
//step1開啟連結 
$link = mysqli_connect("localhost", "root", "12345678", "user_webfinal");

if ($method == "insert") {
    //step2選擇資料庫(新版不用指定)
    //step3下SQL語法
    $sql = "insert into web_user_login (id, name, phone, mail) values ('$id', '$name',
      '$phone', '$mail')";
    echo $sql;
    if (mysqli_query($link, $sql)) {
        header('location:personal.php');
    }
} else {
    $sql = "update web_user_login set name = '$name', phone='$phone', mail='$mail' where
      id='$id'";
    echo $sql;
    echo "2";
    if (mysqli_query($link, $sql)) {
    header("location:personal.php?id='$id'");
    }
}