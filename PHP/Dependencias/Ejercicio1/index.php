<?php
require __DIR__ . '/vendor/autoload.php';

use SebastianBergmann\Timer\Timer;

$timer = new Timer;

$timer->start();

foreach (\range(0, 100) as $i) {
    $ran = random_int(0,100);
    echo($ran);
    echo "  ";
}
echo "<br>";
$duration = $timer->stop();
echo $duration;