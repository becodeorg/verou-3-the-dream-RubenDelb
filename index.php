<?php 
    if (!empty($_POST['amount'])) {
        $amount = $_POST['amount'];
        $fromCurrency = $_POST['fromCurrency'];
        $toCurrency = $_POST['toCurrency'];
    }

    function euroToRupiah() {
        echo "€" . number_format($_POST['amount']) . " = " . number_format($_POST['amount']*16233.76) . " IDR";
    }
    function dollarToRupiah() {
        echo "US$" . number_format($_POST['amount']) . " = " . number_format($_POST['amount']*14271.55) . " IDR";
    }
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
    <h1>Welcome to Indonesia! </h1>
    <h3>Calculate your currency to indonesian rupiah here</h3>
    <form action="" method="post">
        <label for="amount">The amount you want to change: </label>
        <input id="amount" name="amount" placeholder="Enter your amount here" type="number">
        <br><br>
        <label for="fromCurrency">From: </label>
        <select id="fromCurrency" name="fromCurrency">
            <option <?php if (!empty($fromCurrency)) { if ($fromCurrency == "euro") { ?> selected="true" <?php }} ?> value="euro">euro</option>
            <option <?php if (!empty($fromCurrency)) { if ($fromCurrency == "dollar") { ?> selected="true" <?php }} ?> value="dollar">dollar</option>
        </select>
        <label for="toCurrency">To: </label>
        <select id="toCurrency" name="toCurrency" id="toCurrency">
            <option value="Indonesian Rupiah">Indonesian Rupiah</option>
        </select>
        <br><br>
        <input type="submit">
        <br><br>
    </form>
    <?php 
        if (empty($fromCurrency) || empty($toCurrency) || empty($amount)) {
        return;
        }
        else if ($fromCurrency == "euro" && $toCurrency == "Indonesian Rupiah") {
            euroToRupiah();
        }
        else if ($fromCurrency == "dollar" && $toCurrency == "Indonesian Rupiah") {
            dollarToRupiah();
        }
    ?>

</body>
</html>
