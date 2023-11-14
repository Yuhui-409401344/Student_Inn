
<?

if ($_SESSION['level'] <> "user") {
    header('location:login_user.php');
} else {
    $account = $_SESSION["account"];
    $id = $_GET["id"];
    $like = "收藏";
    $method = $_GET["method"];
    $link_per = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
    if ($method == "like") {
        $sql_per = "update web_user_login set $id = '$like' where account = '$account'  ";

        if (mysqli_query($link_per, $sql_per)) {
            header('location:blog.php');
        }
    }
}
?>