<?php
/**
 * Created by PhpStorm.
 * User: Artur
 * Date: 8/8/14
 * Time: 5:27 PM
 */


// Fill up array with names
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Edith";
$a[]="Wenche";
$a[]="Vicky";

// get the q parameter from URL
$q=$_REQUEST["q"];
$hint="";

$data = file_get_contents('content.json');
$json = json_decode($data, true);

;
// lookup all hints from array if $q is different from ""
if ($q !== "") {

    $q=strtolower($q); $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name,0,$len))) {
            if ($hint==="") {
                $hint=$name;
            } else {
                $hint .= ", $name";
            }
        }
    }

}

//$contents = 'Size: '+len($json);

$contents = "UHUU. Size:" + $json;
// Output "no suggestion" if no hint were found
// or output the correct values
echo $hint==="" ? $contents : $hint;
