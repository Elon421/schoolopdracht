<?php

  if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "username: ".$username."<br>password: ".$password;
  }
//  $variabele1 = 10;
//  $variabele2 = 10;

// if($variabele1 == $variabele2) {
//      echo "De twee waarden zijn gelijk";
//  }


//  $variabele1 = 10;
//  $variabele2 = 10;

//  if($variabele1 == 4) {
//      echo "De twee waarden zijn ongelijk";
//  }



 //$variabele1 = 10;
 //$variabele2 = 10;

//if($variabele1 == $variabele2) {
 //   echo "De twee waarden zijn gelijk";
 //} else {
    // echo "De twee waarden zijn ongelijk";
//}


// $variabele1 = 10;
// $variabele2 = 10;

// if($variabele1 == 20) {
//     echo "De twee waarden zijn gelijk";
// } else {
//     echo "De twee waarden zijn ongelijk";
// }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="POST">
<input type="text" name="username" placeholder="username" required> <br>

<input type="text" name="password" placeholder="password" required> <br>

<input type="submit"name ="submit" value="Verstuur">
</form>
</body>
</html>

