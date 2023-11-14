<!-- 訂房資料修改1 -->
<?

if ($_SESSION['level'] <> "admin") {
  header('location:login_user.php');
} else {

$method4 = "booked_update";
$id = $_GET['id'];
$link = mysqli_connect("localhost", "root", "12345678", "manager_webfinal");

$sql = "select * from web_manager_data where id = '$id' ";
$rs4 = mysqli_query($link, $sql);

if ($record4 = mysqli_fetch_assoc($rs4)) {
  $id4 = $record4['id'];
  $account4 = $record4['account'];
  $name4 = $record4['name'];
  $room4 = $record4['room'];
  $date_in4 = $record4['date_in'];
  $date_out4 = $record4['date_out'];
  $pay4 = $record4['pay'];
  $coupon4 = $record4['coupon'];
  $price4 = $record4['price'];
  
}

}
?>
<form method="post" action="personal_booked_dblink.php">
  <input type=hidden name="method" value="<? echo $method4 ?>">
  <div class="modal fade" id="staticBackdrop_false" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"><i class="fas fa-wrench"></i> 資料修改</h5><? echo 123; echo $id4; ?>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

          <table class="table table-hover">
            <tbody>
           
                <td><input name="id" type="hidden" class="form-control" id="recipient-name" value="<? echo $id4 ?>"></td>

              <tr>
                <th scope="row">1</th>
                <td>訂房大名:</td>

                <td><input name="name" type="text" class="form-control" id="recipient-name" value="<? echo $name4 ?>"></td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>訂房帳號:</td>

                <td><input name="account" type="text" class="form-control" id="recipient-name" value="<? echo $account4 ?>" readonly></td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td>入住房型:</td>

                <td>
                  <select name="room" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected><? echo $room4 ?></option>
                    <option value="超大豪華雙人房">超大豪華雙人房</option>
                    <option value="豪華雙人房">豪華雙人房</option>
                    <option value="豪華單人房">豪華單人房</option>
                    <option value="豪華三人房">豪華三人房</option>
                  </select>
                </td>
              </tr>

              <tr>
                <th scope="row">4</th>
                <td>入住日期:</td>

                <td><input name="date_in" type="date" class="form-control" id="recipient-name" value="<? echo $date_in4 ?>"></td>

              </tr>
              <tr>
                <th scope="row">5</th>
                <td>退房日期:</td>

                <td><input name="date_out" type="date" class="form-control" id="recipient-name" value="<? echo $date_out4 ?>"></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>付款方式:</td>
                <td>
                  <select name="pay" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected><? echo $pay4 ?></option>
                    <option value="現場付款(含五倍卷)">現場付款(含五倍卷)</option>
                    <option value="郵局匯款">郵局匯款</option>
                    <option value="信用卡">信用卡</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>使用優惠:</td>
                <td>
                  <select name="coupon" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected><? echo $coupon4 ?></option>
                    <option value="早鳥優惠">早鳥優惠</option>
                    <option value="五倍卷優惠">五倍卷優惠</option>
                    <option value="學生證優惠">學生證優惠</option>
                    <option value="首次入住享優惠">首次入住享優惠</option>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>金額:</td>

                <td><input name="price" type="text" class="form-control" id="recipient-name" value="$<? echo $price4 ?>" readonly></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">關閉</button>
          <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">確認</button>
        </div>
      </div>
    </div>
  </div>
</form>
