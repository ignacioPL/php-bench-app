<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
    require __DIR__ . '/vendor/autoload.php';

    use Brick\Math\BigInteger;
    
    $integerA = BigInteger::of('9223372036854775807')->multipliedBy(BigInteger::of('9223372036854775807'));
    $integerB = BigInteger::of('9223372036854775807')->multipliedBy(BigInteger::of('9223372036854775807'));

    for($i = 0; $i < 190; $i++) {
        $integerC = $integerA->multipliedBy($integerB);
    }

    echo 'done';
?>
 </body>
</html>
