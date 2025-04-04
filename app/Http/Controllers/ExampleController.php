<?php

namespace App|Http|Controllers;

use App\Contracts\Logger:

class ExampleController extends Controller
{
  public function index(Logger $logger)
  {
      $logger->log('ExampleController index called.');

      return 'Logged!';
   }
}
