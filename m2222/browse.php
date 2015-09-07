<?php 

require_once "products.php";

$opt = '';
foreach($products as $id => $item){
    $opt .= "<option value=\"$id\">$item</option>";
}

 ?>



<!DOCTYPE html>
<html lang="en">
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
        <h1>Weclome to browse.</h1>
            <form action="view.php" method="GET">
                <label>Products: <select name="id"></label>
                    <?php echo $opt ?>
                </select>
                <label>Quantity: <input type="number" name="amount"></label>
                <input type="submit">
            </form>
            </div>
        <?php require_once "footer.php" ?>
        
    </body>
</html>