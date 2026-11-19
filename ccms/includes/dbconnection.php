<?php
$con = mysqli_connect("db-service.ccms.svc.cluster.local", "root", "root", "ccmsdb");
if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}

?>
