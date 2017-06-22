<?php

namespace App\Code\Custom\Oops;

class A
{
  public function getData()
  {
    print "Hello from class ".__CLASS__." and method ".__FUNCTION__;
  }
}
?>
