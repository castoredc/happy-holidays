#!/usr/bin/env php
<?php

use League\CLImate\CLImate;

$files = [__DIR__ . '/../vendor/autoload.php', __DIR__ . '/../../../autoload.php'];

foreach ($files as $file) {
   if (! file_exists($file)) {
       continue;
   }

   require $file;
}

$climate = new CLImate();
$climate->style->addColor('brown', 200);

$climate->clear();
$climate->addArt(__DIR__ . '/../assets/');
$climate->draw('splash');
sleep(3);
$climate->clear();
$climate->draw('cheer');
