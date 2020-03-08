<?php

// Without autoload;
// include __DIR__ . '/Tea.php';
// include __DIR__ . '/Coffee.php';

spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});

$tea = new Tea();
$coffee = new Coffee();

print_r($tea->order());
print_r($coffee->order());
