<?php
$output = '';
  if(isset($_POST['submit']))
  {
   include("phpmailer/PHPMailerAutoload.php");
   $mail = new PHPMailer();

   $mail->Host = "smtp.gmail.com";
   $mail->Port = 587;
   $mail->SMTPAuth = true;
   $mail->SMTPSecure = "tls";
   $mail->Username = "nyanavati2018@gmail.com";
   $mail->Password = "09257031942";
   $mail->SetFrom($_POST['email'],$_POST['name']);
   $mail->addAddress("uzinwebmdy@gmail.com");
   $mail->addReplyTo($_POST['email'],$_POST['name']);

   $mail->isHTML(true);
   $mail->Subject = "Form Submission: ".$_POST['subject'];
   $mail->Body = "<h3>Name: ".$_POST['name']."<br>Email: ".$_POST['email']."<br>Message: ".$_POST['message']."</h3>";
   if(!$mail->send())
   {
    $output = '<div class="alert alert-danger">
     <h5>There was an error sending this message. Please try again later</h5>
    </div>';
   }
   else
   {
    $output = '<div class="alert alert-success">
     <h5>Thankyou!  We will get back to you soon!</h5>
    </div>';
   }
   }
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Contact Us Using PHPMailer & Gmail SMTP</title>
 <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css' />
</head>

<body class="bg-info">
 <div class="container">
  <div class="row justify-content-center">
   <div class="col-lg-6 mt-3">
    <div class="card border-danger shadow">
     <div class="card-header bg-danger text-light">
      <h3 class="card-title">Contact Us</h3>
     </div>
     <div class="card-body px-4">
      <form action="#" method="POST">
       <div class="form-group">
        <?= $output; ?>
       </div>
       <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
       </div>
       <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Enter E-Mail" required>
       </div>
       <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Enter Subject" required>
       </div>
       <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="5" class="form-control" placeholder="Write Your Message"
         required></textarea>
       </div>
       <div class="form-group">
        <input type="submit" name="submit" value="Send" class="btn btn-danger btn-block" id="sendBtn">
       </div>
      </form>
     </div>
    </div>
   </div>
  </div>
 </div>
</body>

</html>