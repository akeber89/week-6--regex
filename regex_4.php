<?php

declare(strict_types=1);

function phoneNumber(string $str) : bool {
    return preg_match("/^[-\d]+$/", $str) === 1;
};

var_dump(phoneNumber("blah")); // bool(false)
var_dump(phoneNumber("12-323-5-344")); // bool(true)
var_dump(phoneNumber("12-34-a334-43")); // bool(false)
var_dump(phoneNumber("--123----23123")); // bool(true)

// Create a function phoneNumber, that returns true if the given string contains only numbers and hyphens:

// Hint: you can use both anchors (^ and $) in the same regex

