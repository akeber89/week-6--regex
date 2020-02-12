<?php

declare(strict_types=1);

// … your function here

var_dump(validEmail(" blahf   ")); // bool(false)
var_dump(validEmail(" blah@f")); // bool(false)
var_dump(validEmail(" blah@fish.horse")); // bool(true)
var_dump(validEmail("blah@fish.horse ")); // bool(true)
var_dump(validEmail(" blah@fish.horse ")); // bool(true)

// Create a function validEmail that takes a string, trims any whitespace at the beginning/end of the string 
//(using preg_replace) and then returns if the trimmed string is a valid email:

 //   Hint: you can use ( to group ) parts of a regex and | as or