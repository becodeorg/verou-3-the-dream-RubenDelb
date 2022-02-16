<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <h1>Welcome to Indonesia! </h1>
    <h3>Calculate your currency to the local currency here</h3>
    <form action="" method="post">

        <label for="number">The amount you want to change: </label>
        <input id="number" name="number" placeholder="Enter your amount here" type="number">
        <br><br>

        <label>From:
            <input list="fromCurrency" name="fromCurrency">
        </label>
        <datalist id="fromCurrency">
            <option value="euro">
            <option value="dollar">
        </datalist>
        <label>To:    
            <input list="toCurrency" name="toCurrency">
        </label>
        <datalist id="toCurrency">
            <option value="Indonesian Rupiah">
        </datalist>
        <br><br>
        <input type="submit">
        <br><br>
    </form>
    <?php 
        if (empty($_POST['fromCurrency']) || empty($_POST['toCurrency']) || empty($_POST['number'])) {
        return;
        }
        else if ($_POST['fromCurrency'] == "euro" && $_POST['toCurrency'] == "Indonesian Rupiah") {
            echo number_format($_POST['number']) . " Euro = " . number_format($_POST['number']*16233.76) . " Indonesian Rupiah";
        }
        else if ($_POST['fromCurrency'] == "dollar" && $_POST['toCurrency'] == "Indonesian Rupiah") {
            echo number_format($_POST['number']) . " Dollar = " . number_format($_POST['number']*14271.55) . " Indonesian Rupiah";
        }
    ?>

</body>
</html>
