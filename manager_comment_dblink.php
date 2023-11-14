
<?
if ($_SESSION['level'] <> "admin") {
    header('location:login_user.php');
} else {

    $method = $_POST['method'];
    $id = $_POST["id"];
    $reply = $_POST["reply"];
    $link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

    if ($method == "manager_comment_update") {
        $sql = "update web_user_feedback set reply = '$reply'  where id='$id'";
        if (mysqli_query($link, $sql)) {
            header('location:manager_comment.php');
        }
    }
}
?>