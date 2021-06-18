<?php
include 'connections.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>