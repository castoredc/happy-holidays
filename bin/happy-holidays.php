#!/usr/bin/env php
<?php

use League\CLImate\CLImate;

require_once __DIR__ . '/../vendor/autoload.php';

$climate = new CLImate();

$climate->clear();
$climate->addArt(__DIR__ . '/../assets/');
$climate->draw('splash1');
sleep(4);
$climate->clear();
$climate->draw('cheer');
