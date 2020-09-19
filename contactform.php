<?php 
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailForm = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "2011brunofernandes@gmail.com";
  $headers = "from: ".$mailForm;
  $txt = "voce recebeu um email de".$name.".\n\n".$message;
  mail($mailTo, $subject, $txt, $headers);
  header("location: index.php?mailsend");
}
 ?>