<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1>EURO TO INDONESIAN RUPIAH CONVERTOR</h1>
    <form action="" method="get">
        <label for="number">Your amount in Euro: </label>
        <input id="number" name="number" placeholder="Enter your amount here" type="number">
        <input type="submit">
    </form>
    <?php 
        if (empty($_GET)) {
        return;
        }
        else {
        echo $_GET['number'] . "euro = " . $_GET['number']*16233.76 . " Indonesian Rupiah";
        }
    ?>

</body>
</html>
