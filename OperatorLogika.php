<?php 

// $a && $b (And) => true jika $a dan $b keduanya true//
var_dump(true && true);
var_dump(true && false);


//$a || $b (Or) ==> true jika $a dan $b salah satu atau keduanya true//
var_dump(true || false);
var_dump(true || true);


//$a xor $b (XOR)  ==> true jika $a dan $b salah satu true, tapi tidak keduanya//
var_dump(true xor false);
var_dump(true xor true);


//!$a (Not) ==> true jika $a bernilai false//
var_dump(!true);
var_dump(!false);

