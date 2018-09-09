<?php
function rekursif($kolom){
  global $i;
    rekursif2($i, $kolom);
    echo "<br>";
    if (--$kolom > $i){
        rekursif($kolom);
    }
}
function rekursif2($j, $kolom) {
	global $i;
    if ($j > $i - $kolom) {
        echo "*";
        rekursif2($j - 1, $kolom);
    }
}
$i = 0;
rekursif(5);

echo "<br>/*====================================================================================*/<br><br>";

function recursive($l, $g) {
	global $col;
    recursive2($col, $l, $g);
    echo "<br>";
    if (++$l < $col){
        recursive($l, $g);
    }
}
function recursive2($k, $l, $c) {
	global $col;
    if ($k > $col - $l - 1) {
        echo "$c ";
        recursive2($k - 1, $l, $c + 1);
    }
}
$col = 5;
recursive(0,1);
?>
