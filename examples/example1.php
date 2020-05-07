<?php
include_once '../vendor/autoload.php';

$translator = new \Tanmuhittin\PhpTranslate\TheTranslator('stichoza',null);
echo $translator->translate('Selam dünya','en','tr');
