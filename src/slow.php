<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
<?php
    require __DIR__ . '/vendor/autoload.php';

    use Brick\Math\BigInteger;
    $queries = array();
    parse_str($_SERVER['QUERY_STRING'],$queries);
    $integerA = BigInteger::of('9223372036854775807')->multipliedBy(BigInteger::of('9223372036854775807'));
    $integerB = BigInteger::of('9223372036854775807')->multipliedBy(BigInteger::of('9223372036854775807'));
    //3800
    for($i = 0; $i < $queries['size']; $i++) {
        $integerC = $integerA->multipliedBy($integerB)->multipliedBy(BigInteger::of($i));
    }

    echo 'done';
?>
 </body>
</html>
