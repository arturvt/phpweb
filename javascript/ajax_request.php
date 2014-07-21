<?php

$value = array('first' => 'Steven', 'last' => 'Spilberg', 'address' => '1234 unlisted Drive');
$obj_encoded = json_encode($value);
$obj_decoded = json_decode($obj_encoded);

print $obj_encoded;
//
// $output = $json->encode($value);
//
// print ($output);
