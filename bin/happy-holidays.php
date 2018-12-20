#!/usr/bin/env php
<?php

use League\CLImate\CLImate;

require_once __DIR__ . '/../vendor/autoload.php';

$climate = new CLImate();
$climate->style->addColor('brown', 200);

$climate->clear();
$climate->addArt(__DIR__ . '/../assets/');
$climate->draw('splash');
sleep(3);
$climate->clear();
$climate->draw('cheer');
