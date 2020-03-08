<?php
require __DIR__ . '/vendor/autoload.php';

use Vijaycs85\Cafe\Tea;
use Vijaycs85\Cafe\Coffee;

$tea = new Tea();
$coffee = new Coffee();

print_r($tea->order());
print_r($coffee->order());
