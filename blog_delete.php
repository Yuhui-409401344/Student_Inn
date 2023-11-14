<?
if($_SESSION['level']<>"user")
{
  header('location:login_user.php');
}


else{


  $id = $_GET["id"];
  $date_in = $_GET["date_in"];

  $link=mysqli_connect("localhost","root","12345678","manager_webfinal");

  if(date('Y-m-d') == $date_in){
  
    header('location:personal_wrong_delete.php');
  }
  else{
    $sql="delete from web_manager_data where id = '$id'";
  if(mysqli_query($link,$sql))
  {
    header('location:personal_sure_delete.php');
  }
  }
  
  
  
}
?>