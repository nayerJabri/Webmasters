<?php
ob_start();
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
  header("Refresh:0");
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
   header("Refresh:0");
  }
}
function deleteComments($conn) {
  if(isset($_POST['deleteComment'])) {
   $cid = $_POST['cid'];
 
   $sql = "DELETE FROM comments WHERE cid='$cid'";
   $result = $conn->query($sql);
   header("Refresh:0");
  }
}
function reportComments($conn) {
  if(isset($_POST['reportComment'])) {
   $cid = $_POST['cid'];
   $state = $_POST['state'];
   $sql = "UPDATE comments SET state='$state' WHERE cid='$cid'";
   $result = $conn->query($sql);
  }
}
require 'PHPMailerAutoload.php';
function reportmail($conn) {
  if(isset($_POST['reportComment'])) {
   $cid = $_POST['cid'];
   $uid = $_POST['uid'];
   $message = $_POST['message'];
   $sql = "SELECT Adresse_Email FROM client WHERE  prenom='$uid'";
   $result = $conn->query($sql);
   $emails = $result->fetch_assoc();
   $email=$emails['Adresse_Email'];
   $subject = 'Your Comment has been reported';
   $text = "<h1> Hi THERE.</h1> <p> your comment has been reported and will be review by our admin staff your comment:  <h4> $message </h4></p>";

   $mail = new PHPMailer;

   // $mail->SMTPDebug = 4;                               // Enable verbose debug output

   $mail->isSMTP();                                      // Set mailer to use SMTP
   $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
   $mail->SMTPAuth = true;                               // Enable SMTP authentication
   $mail->Username = 'supermarketad@gmail.com';                 // SMTP username
   $mail->Password = 'SuperAdminM';                           // SMTP password
   $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
   $mail->Port = 587;                                    // TCP port to connect to

   $mail->setFrom('supermarketad@gmail.com', 'SoukElMedina');
   $mail->addAddress($email);     // Add a recipient

   $mail->addReplyTo('supermarketad@gmail.com');
   
   $mail->isHTML(true);                                  // Set email format to HTML

   $mail->Subject =$subject ;
   $mail->Body    = $text;

   $mail->send();
  }
}