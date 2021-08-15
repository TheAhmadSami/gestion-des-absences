<?php
  require_once("_config.php");

  $id = $_POST['id'];
  $requestStatus = $_POST['requestStatus'];

  $dbResult = $db->query('UPDATE requests SET status = :status WHERE id=:id', [':id'=>$id, ':status'=>$requestStatus]);

  if ($dbResult) {
    printResult(json_encode($dbResult));
  }else{
    printResult(false);
  }

?>