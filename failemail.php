<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href ="fail.css">
</head>
<body>
    <form action = "failemail" method ="post">
        <div id=word>Your email is not sent ,Something may went wrong please try again</div><br><br>

        <input type ="submit" name ="fail" value ="BackTOFeedBack">
    </form>
    
</body>
</html>
