<?php
 session_start();
?>
<?php
 include("headers.html")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="feed.css">
</head>
<body>
    <form action="feedback.php" method="post">
     
    <labe>Enter Your Name</labe>
    <input type="text" name ="ename"><br>
    
    <label>Enter Your Surname</label>
    <input type="text" name = "esurname"><br>

    <input type ="email" name ="email" placeholder="Enter your email" required>
     
    <label>Enter your Subject
    <input type = "text" name="subj"><br>

    <textarea name="mess" placeholder="write your feedback here" required></textarea><br>

    <input type = "submit" name = "send" value="SEND">


    </form>
    
</body>
</html>

<?php

   if($_SERVER["REQUEST_METHOD"]=="POST")
   {
    $name = $_POST["ename"];
    $surna = $_POST["esurname"];
    $email = $_POST["email"];
    $subject = $_POST["subj"];
    $message = $_POST["mess"];

      $to="vuyiswaandile176@gmail.com";
      $header="From: $email";


    mail($to,$email,$message,$header, $subject);
     
    if(mail($to,$message,$email,$header,$subject) && isset($_POST["send"]))
    
        {
         header("Location: sentemail.php");
        }
    else
       {
         header("Location: failemail.php");
        }
  }

?>