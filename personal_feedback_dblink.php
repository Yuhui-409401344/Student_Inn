<?

if($_SESSION['level']<>"user")
{
  header('location:login_user.php');
}else{


$method = $_POST["method"];
$account = $_SESSION["account"];
$comment = $_POST["comment"];
$wrong = $_POST["wrong"];
$reply = "業主尚未回覆，請耐心等候!";

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

if ($method == "comment_insert") {
    
    $sql = "insert into web_user_feedback
     (account, comment, wrong, reply) values
     ('$account', '$comment','$wrong', '$reply')";
    
    if (mysqli_query($link, $sql)) {
        header('location:personal.php');
    }
} 

}
?>
