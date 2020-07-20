<?php
$conn = mysqli_connect('localhost', 'root', '','projet', '3308');
if(!$conn) {
  die("Connection failed: ".mysqli_connect_errorr());
}
if(isset($_GET['cid'])) {
   $cid = $_GET['cid'];
   $state = 0;
   $sql = "DELETE FROM comments WHERE cid='$cid'";
   $result = $conn->query($sql);
   header('Location: ../manage Comments.php');
  }
  ?>