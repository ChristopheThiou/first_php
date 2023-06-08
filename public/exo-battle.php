<?php

use App\Battle\Creature;

require '../vendor/autoload.php';

$creature1 = new Creature("Albert");
$creature2 = new Creature("Jean Jacque");

$creature2->defend();
$creature1->attack($creature2);
// $creature1->attack($creature2);
$creature2->attack($creature1);

var_dump($creature2);
