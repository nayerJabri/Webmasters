<?php
$conn = mysqli_connect('localhost', 'root', '','projet', '3308');
if(!$conn) {
  die("Connection failed: ".mysqli_connect_errorr());
}
if(isset($_GET['cid'])) {
   $cid = $_GET['cid'];
   $state = 0;
   $sql = "UPDATE comments SET state='$state' WHERE cid='$cid'";
   $result = $conn->query($sql);
   header('Location: ../manage Comments.php');
  }
  ?>