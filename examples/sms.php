<?php

use Toruse\bsg\BSG;

require __DIR__.'/../vendor/autoload.php';

$apikey = '';

$sendSms = new BSG();

$sendSms->setPhone('380501111111')->setPhone('380501111112');

var_dump($sendSms);
