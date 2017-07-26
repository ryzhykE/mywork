<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Calculator</title>
</head>
<body>
    <?=$firstN; ?> + <?=$secondN; ?> = <?=$sum;?> </br>
    <?=$firstN; ?> - <?=$secondN; ?> = <?=$minus;?></br>
    <?=$firstN; ?> * <?=$secondN; ?> = <?=$multi;?></br>
    <?=$firstN; ?> / <?=$secondN; ?> = <?=$devide;?></br>
    sqrt <?=$firstN; ?> = <?=$sqr;?></br>
    <?=$firstN; ?> persent <?=$secondN; ?> = <?=$persent;?></br>

    MS = <?=$memory;?></br>
    M+ 5  =  <?=$memoryP;?></br>
    M- 5 = <?=$memoryM;?></br>
    MC clear = <?var_dump($memoryC);?>


</body>
</html>