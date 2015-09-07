<?php 

require_once "products.php";

$amount = '';
$id = '';
$message = '';
$product_name = '';
$cook_name = 'stuff';
$cook_value = 66;
$cook_expire = time() +(60*60*24*7*2);

$error = ['error_1' =>'Error, where is the amount', 
         'error_2' => 'Error, what is the id?'
         ];

if(isset($_GET['id']) && is_numeric($_GET['id'])&& $_GET['id'] > 0){
    if(isset($_GET['amount']) && is_numeric($_GET['amount'])&& $_GET['amount'] > 0){
        $amount = $_GET['amount'];
        $id = $_GET['id'];
        setcookie($cook_name, $cook_value, $cook_expire);
        
        // echo $amount . $id;
    } else{
        $message = $error['error_1'];
    }
} else{
    $message = $error['error_2'];
}

if(array_key_exists($id, $products)){
    $product_name = $products[$id];
    $message = "You ordered $amount $product_name";
} else {
    // echo $error['error_2'];
}

if($id == 1 && $amount > 7){
    $message = "You can't order $amount macs";
}




 ?>


 <!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/normal.css">
        <link rel="stylesheet" type="text/css" href="css/css.css">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <?php require_once "header.php" ?>
        <div class="main_content">
            <?php echo $message; ?>
        </div>
        <?php require_once "footer.php" ?>
    </body>
</html>