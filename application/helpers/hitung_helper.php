<?php
function total($a,$b){
	if (!is_numeric($a) OR !is_numeric($b)) return null;
	return ($a -($a * $b/100) + ($a*10/100));
}	
function pajak($a){
	return ($a * 10/100 );
}
function diskon($a,$b){
	if (!is_numeric($a) OR !is_numeric($b)) return null;
	return ($a*$b/100);
}
function setelah($a,$b){
	return ($a - $a * 10/100) ;
}
function totalset($a,$b){
	if (!is_numeric($a) OR !is_numeric($b)) return null;
	return ($a -($a * $b/100) + ($a*10/100));

}