<?php

include 'vendor/autoload.php';

use Carbon\Carbon;
use composersample\Library\Math;

echo Carbon::now()->addDay();
echo Math::add(1, 2);
