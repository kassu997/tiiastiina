<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;

$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['nimi', 'email', 'puh' ])->arerequired()->maxLength(50);
$validator->field('email')->isEmail();
$validator->field('viesti')->maxLength(6000);

$pp->sendEmailTo('kainiemi0@gmail.com');

echo $pp->process('POST');