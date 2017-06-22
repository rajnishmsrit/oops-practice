<?php

require 'vendor/autoload.php';

use \App\Code\Custom\Oops\Test;
use \App\Code\Custom\Oops\A;
use \App\Code\Custom\Oops\B;
use \App\Code\Theme\Blue\Bootstrap;

$test = new Test();
//echo $test->returnData();

//echo "<br>";

$trial = new A();
//echo $trial->getData();

//echo "<br>";

$trial = new B();
//echo $trial->getData();

$data = new Bootstrap();
$data->render("Hello Guys !!");

 ?>
