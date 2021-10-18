<?php

require 'vendor/autoload.php';
use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');
$bessie->setEyes('oO');
$bessie->setPoop('@@@');
$bessie->setTongue('U');
$bessie->setUdder('W');



echo $bessie;