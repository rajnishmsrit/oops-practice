<?php

namespace App\Code\Custom\Oops;

class B
{
  public function getData()
  {
    print "Hello from class ".__CLASS__." and method ".__FUNCTION__;
  }
}
?>
