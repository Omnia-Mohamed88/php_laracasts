<?php 

use Illuminate\Support\Collection;

require __DIR__.'/../vendor/autoload.php';

$numbers = new Collection([
    range(1, 10)
]);
