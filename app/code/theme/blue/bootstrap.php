<?php

namespace App\Code\Theme\Blue;

Class Bootstrap
{
  public function __construct()
  {

  }

  public function render($html)
  {
    $head='<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="app/lib/bootstrap-3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="app/lib/custom/css/custom.css" />

    <script src="app/lib/jquery/jquery-1.10.2.js"></script>
    <script src="app/lib/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="app/lib/custom/js/custom.js"></script>

    <title>OOPS Examples</title>
  </head>
  <body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand text-center" href="#">
            OOPS Examples
          </a>
        </div>
      </div>
    </nav>';

    $end="</body></html>";
    echo $head."<h2>".$html."</h2>".$end;
  }
}
?>
