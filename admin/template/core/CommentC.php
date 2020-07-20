<?php
$conn = mysqli_connect('localhost', 'root', '','projet', '3308');
if(!$conn) {
  die("Connection failed: ".mysqli_connect_errorr());
}
function setComments($conn) {
 if(isset($_POST['submitComment'])) {
  $postid = $_GET['id'];
  $uid = $_POST['uid'];
  $date = $_POST['date'];
  $message = $_POST['message'];

  $sql = "INSERT INTO comments(uid,date,message,postid) VALUES ('$uid', '$date', '$message', '$postid')";
  $result = $conn->query($sql);
 }
}
function getComments($conn, $pid) {
 $sql = "SELECT  *
FROM comments
WHERE postid = $pid
ORDER BY date";
 $result = $conn->query($sql);
 return $result;
}
function CommentsCount($conn, $pid) {
  $sql = "SELECT COUNT(cid) as commentno FROM comments WHERE postid = $pid";
  $results = $conn->query($sql);
  $result = $results->fetch_array(MYSQLI_ASSOC);
  echo $result['commentno'];
}
function editComments($conn) {
  if(isset($_POST['editComment'])) {
   $cid = $_POST['cid'];
   $editdate = $_POST['editdate'];
   $message = $_POST['message'];
 
   $sql = "UPDATE comments SET message='$message',editdate='$editdate' WHERE cid='$cid'";
   $result = $conn->query($sql);
  }
}
function deleteComments($conn) {
  if(isset($_POST['deleteComment'])) {
   $cid = $_POST['cid'];
 
   $sql = "DELETE FROM comments WHERE cid='$cid'";
   $result = $conn->query($sql);
  }
}
function CommentsCountpermonth($conn) {
  $sql = "SELECT monthname( date ) AS
  MONTH , count(*) AS com
  FROM `comments`
  WHERE year( date ) = '2020'
  GROUP BY monthname( date )
  ORDER BY monthname( date ) DESC";
  $results = $conn->query($sql);
  $result = $results->fetch_array(MYSQLI_ASSOC);
  return $result;
}