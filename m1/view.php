<?php 

$message = "No such product";

if(isset($_GET['product'])){
    $product = $_GET['product'];
    if($product == 1){
        $message = "You have choosen Mac";
    }elseif($product == 2){
        $message ="You have choosen Ubuntu";
    }elseif($product == 3){
        $message = "You have choosen Windows";
    }
}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css.css">
    </head>
    <body>
        <?php require_once "header.php" ?>
            <main>
                <h2><?php echo $message; ?><h2>
            </main>
        <?php require_once "footer.php" ?>
    </body>
</html>