<?php 

$username = '';
$password = '';

if(isset($_GET['username'])){
    $username = $_GET['username'];
}

if(isset($_GET['password'])){
   $password = $_GET['password']; 
}




// $isLogged = true;

// if($isLogged == true){
//     header("Location: account.php");
// }


function isValid($username,$password){
    if(isset($_GET['username']) && isset($_GET['password'])){
        return true;
    } else {
        return false;
    }
}

if(isValid($username, $password)){
    session_start();
    $_SESSION['username'] = $username;
    header("Location: account.php");
    die;
} else {
    echo "invalid";
}

 ?>


 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <title>Document</title>
     </head>
     <body>
        <form>
            <label>Username: <input type="text" name="username"></label><br>
            <label>Password: <input type="text" name="password"></label>
            <button>Submit</button>
        </form>
     </body>
 </html>