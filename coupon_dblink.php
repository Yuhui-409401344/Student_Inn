<?
$method = $_POST['method'];
$id = $_POST["id"];
$name = $_POST["name"];

$big_two = $_POST["big_two"];
$big_two_img = $_POST["big_two_img"];
$big_two_w_after = $_POST["big_two_w_after"];
$big_two_w_before = $_POST["big_two_w_before"];
$big_two_h_after = $_POST["big_two_h_after"];
$big_two_h_before = $_POST["big_two_h_before"];
$big_two_content = $_POST["big_two_content"];

$two = $_POST["two"];
$two_img = $_POST["two_img"];
$two_w_after = $_POST["two_w_after"];
$two_w_before = $_POST["two_w_before"];
$two_h_after = $_POST["two_h_after"];
$two_h_before = $_POST["two_h_before"];
$two_content = $_POST["two_content"];

$one = $_POST["one"];
$one_img = $_POST["one_img"];
$one_w_after = $_POST["one_w_after"];
$one_w_before = $_POST["one_w_before"];
$one_h_after = $_POST["one_h_after"];
$one_h_before = $_POST["one_h_before"];
$one_content = $_POST["one_content"];

$three = $_POST["three"];
$three_img = $_POST["three_img"];
$three_w_after = $_POST["three_w_after"];
$three_w_before = $_POST["three_w_before"];
$three_h_after = $_POST["three_h_after"];
$three_h_before = $_POST["three_h_before"];
$three_content = $_POST["three_content"];

$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
if ($method == "coupon_update")  {
    $sql = "update web_manager_coupon set name = '$name', 

    big_two_img='$big_two_img', 
    big_two_w_after='$big_two_w_after', big_two_w_before='$big_two_w_before',
    big_two_h_after='$big_two_h_after', big_two_h_before='$big_two_h_before',
    big_two_content='$big_two_content',

    two_img='$two_img', 
    two_w_after='$two_w_after', two_w_before='$two_w_before',
    two_h_after='$two_h_after', two_h_before='$two_h_before',
    two_content='$two_content',

    one_img='$one_img', 
    one_w_after='$one_w_after', one_w_before='$one_w_before',
    one_h_after='$one_h_after', one_h_before='$one_h_before',
    one_content='$one_content',

    three_img='$three_img', 
    three_w_after='$three_w_after', three_w_before='$three_w_before',
    three_h_after='$three_h_after', three_h_before='$three_h_before',
    three_content='$three_content'
 
    where  id = '$id'  ";
    if (mysqli_query($link, $sql)) {

        header('location:news.php');
    }
}else {
      $sql = "insert into web_manager_coupon 
      (name, 
      big_two, big_two_img, big_two_w_after,big_two_w_before, big_two_h_after,big_two_h_before,big_two_content,
      two, two_img, two_w_after,two_w_before, two_h_after,two_h_before,two_content,
      one, one_img, one_w_after,one_w_before, one_h_after,one_h_before,one_content,
      three, three_img, three_w_after,three_w_before, three_h_after,three_h_before,three_content
      ) 
      values 
      ('$name', 
      '$big_two','$big_two_img', '$big_two_w_after','$big_two_w_before','$big_two_h_after','$big_two_h_before','$big_two_content',
      '$two','$two_img', '$two_w_after','$two_w_before','$two_h_after','$two_h_before','$two_content',
      '$one','$one_img', '$one_w_after','$one_w_before','$one_h_after','$one_h_before','$one_content',
      '$three','$three_img', '$three_w_after','$three_w_before','$three_h_after','$three_h_before','$three_content'
      )";
    if (mysqli_query($link, $sql)) {
        header('location:news.php');  
    }
}
