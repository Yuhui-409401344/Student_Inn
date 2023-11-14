
<?
if ($_SESSION['level'] <> "user") {
    header('location:login_user.php');
} else {

    $account = $_SESSION["account"];
    $id = $_GET["id"];
    $dislike = "無收藏";
    $method = $_GET["method"];

    $link_per = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

    if ($method == "dislike") {
        $sql_per = "update web_user_login set $id = '$dislike' where account = '$account'  ";

        if (mysqli_query($link_per, $sql_per)) {
            header('location:blog.php');
        }
    }
}
?>