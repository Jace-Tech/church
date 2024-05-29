<?php

$envPath = ".variables";
if(!file_exists($envPath)) die("NO ENV FILE FOUND!");

$lines = explode("\n", file_get_contents($envPath));

foreach($lines as $line) {
  if(!trim($line)) continue;
  list($key, $value) = explode("=", $line);
  $_ENV[trim($key)] = trim($value);
}