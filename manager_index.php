<?

  $method = $_GET["method"];

  switch ($method) {
    case "insert":
      include "insert.php";
      break;
    case "manager_update":
      include "manager_update.php";
      break;
    case "manager_delete":
      include "manager_delete.php";
      break;
    case "login":
      include "login.php";
      break;
    case "logout":
      include "logout.php";
      break;
    case "message":
      include "message.php";
      break;
    default:
      include "query.php";
  }
  ?>