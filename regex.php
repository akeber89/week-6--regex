<?php

$result = preg_match("/[a-z]/", "afdaf123") === 1; // at any point is there a lower case letter in this string?

var_dump($result);