<?php
$array1 = explode(",", $_GET['array1']);
$array2 = explode(",", $_GET['array2']);

$array1 = array_map('intval', $array1);
$array2 = array_map('intval', $array2);

if ($array1 == $array2) {
    print "Os arrays são iguais.<br>";
} else {
    print "Os arrays são diferentes.<br>";
}
?>
