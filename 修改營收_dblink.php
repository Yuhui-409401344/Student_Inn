<?
$method = "report_update";
$rate = $_POST['rate'];
$id = $_POST['id'];
$saving_2020 = $_POST['saving_2020'];
$saving_2021 = $_POST['saving_2021'];

$link0 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link1 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link2 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link3 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link4 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link5 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link6 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link7 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link8 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link9 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link10 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
$link11 = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");
// for ($i = 0; $i <= 11; $i++) {
if ($method == "report_update") {


    $sql0 = "update income set saving_2020 = '$saving_2020[0]', saving_2021='$saving_2021[0]', rate='$rate[0]' where id='$id[0]'";
    echo $sql0;
    $sql1 = "update news set saving_2020 = '$saving_2020[1]', saving_2021='$saving_2021[1]', rate='$rate[1]' where id='$id[1]'";
    echo $sql1;
    $sql2 = "update news set saving_2020 = '$saving_2020[2]', saving_2021='$saving_2021[2]', rate='$rate[2]' where id='$id[2]'";
    echo $sql2;
    $sql3 = "update news set saving_2020 = '$saving_2020[3]', saving_2021='$saving_2021[3]', rate='$rate[3]' where id='$id[3]'";
    echo $sql3;
    $sql4 = "update news set saving_2020 = '$saving_2020[4]', saving_2021='$saving_2021[4]', rate='$rate[4]' where id='$id[4]'";
    echo $sql4;
    $sql5 = "update news set saving_2020 = '$saving_2020[5]', saving_2021='$saving_2021[5]', rate='$rate[5]' where id='$id[5]'";
    echo $sql5;
    $sql6 = "update news set saving_2020 = '$saving_2020[6]', saving_2021='$saving_2021[6]', rate='$rate[6]' where id='$id[6]'";
    echo $sql6;
    $sql7 = "update news set saving_2020 = '$saving_2020[7]', saving_2021='$saving_2021[7]', rate='$rate[7]' where id='$id[7]'";
    echo $sql7;
    $sql8 = "update news set saving_2020 = '$saving_2020[8]', saving_2021='$saving_2021[8]', rate='$rate[8]' where id='$id[8]'";
    echo $sql8;
    $sql9 = "update news set saving_2020 = '$saving_2020[9]', saving_2021='$saving_2021[9]', rate='$rate[9]' where id='$id[9]'";
    echo $sql9;
    $sql10 = "update news set saving_2020 = '$saving_2020[10]', saving_2021='$saving_2021[10]', rate='$rate[10]' where id='$id[10]'";
    echo $sql10;
    $sql11 = "update news set saving_2020 = '$saving_2020[11]', saving_2021='$saving_2021[11]', rate='$rate[3]' where id='$id[11]'";
    echo $sql11;

    if (mysqli_query($link0, $sql0)) {
        echo 123;
    }
    if (mysqli_query($link1, $sql1)) {
        echo 111;
    }

    if (mysqli_query($link2, $sql2)) {
        echo 123;
    }

    if (mysqli_query($link3, $sql3)) {
        echo 123;
    }

    if (mysqli_query($link4, $sql4)) {
        echo 123;
    }

    if (mysqli_query($link5, $sql5)) {
        echo 123;
    }

    if (mysqli_query($link6, $sql6)) {
        echo 123;
    }

    if (mysqli_query($link7, $sql7)) {
        echo 123;
    }

    if (mysqli_query($link8, $sql8)) {
        echo 123;
    }

    if (mysqli_query($link9, $sql9)) {
        echo 123;
    }

    if (mysqli_query($link10, $sql10)) {
        echo 123;
    }

    if (mysqli_query($link11, $sql11)) {
        echo 123;
        header('location:report.php?');
    }
}
