<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
        $chars = [
            "KA",
            "KH",
            "GA",
            "GH",
            "NG",
            "CA",
            "CH",
            "JA",
            "JH",
            "NY",
            "DD",
            "NN",
            "TA",
            "TH",
            "DA",
            "DH",
            "NA",
            "PA",
            "PH",
            "BA",
            "BH",
            "MA",
            "YA",
            "RA",
            "LA",
            "WA",
            "SA",
            "HA",
            "LL",
            "OU",
            "AE"];


      $number = [1,
                2,
                3,
                4,
                5,
                6,
                7,
                8,
                9,
                10,
                11,
                12,
                13,
                14,];
    
    ?>
</head>
<body>
    <form action="">
        <select name="" id="">
            <?php
                $e = count($number);
                foreach ($number as $number){
                    echo '<option value='.`$number`.'>'.$number.'</option>';
                }
            ?>
        </select> /
        <select name="" id="">
            <?php
                $e = count($chars);
                foreach ($chars as $char){
                    echo '<option value='.`$char`.'>'.$char.'</option>';
                }
            ?>
        </select>
        <select name="" id="">
            <?php
                $e = count($chars);
                foreach ($chars as $char1){
                    echo '<option value='.`$char1`.'>'.$char1.'</option>';
                }
            ?>
        </select>
        <select name="" id="">
            <?php
                $e = count($chars);
                foreach ($chars as $char2){
                    echo '<option value='.`$char2`.'>'.$char2.'</option>';
                }
            ?>
        </select>
        (N)
        <input type="number">
    </form>
</body>
</html>