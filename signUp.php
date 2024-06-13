<?php

require 'configure.php';

$name = $_POST['$name'];
$email = $_POST['$name'];
$phone = $_POST['phone'];
$pass = $_POST['pass1'];

if(isset($_POST['$submit']))
{

    $sql = "INSERT INTO tableName VALUES ($name, $email, $phone, $pass)";
     
    if($con->query($sql))
    {
        echo "success";
    }
    else{
        echo "failed";
    }

}



$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css-r/signUp.css">
</head>
<body>
    <div id="div1">
        <form action="signUp.php" method="post">
            <h1>SIGN UP</h1>
        <input class="input" type="text" placeholder="Name" name="name" required><br><br>
        <input class="input" type="email" placeholder="E-mail" name="email" required><br><br>

    <input class="input" type="tel" placeholder="Contact" name="phone" required><br><br>
<input class="input" type="password" placeholder="password" name="pass" id="pass1" required><br><br>
        <input class="input" type="password" placeholder="re-enter password" name="pass" id="pass2" required><br><br>
    <input type="checkbox" required><label>I agree with terms & conditions</label> <br><br>
<center>
    <input class="input2" type="submit" name="submit" onclick="checkPass();">
</center>

</form>
    </div>
    <script src="js-r/signUp.js"></script>
</body>
</html>