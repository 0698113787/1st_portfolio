<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href ="sent.css">
</head>
<body>
    <form action ="sentemail.php" method="post">

        <div id = "words" >The email is sent ,Thank You</div><br><br>

        <input type ="submit" name ="sent" value="BackToFeedback">
        
    </form>
</body>
</html>

<?php

 if(isset($_POST["sent"]))
 {
    header("Location : feedback.php");
 }

?>