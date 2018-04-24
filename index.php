<?php
require 'vendor/autoload.php';

use Kata\Bot;

$fb = new Bot();

$cmds = $fb->parseCommand('LW1RW2LW3RW4');
print_r($cmds);
