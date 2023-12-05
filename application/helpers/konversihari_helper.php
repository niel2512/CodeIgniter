<?php
function jam($a){
	if (!is_numeric($a)) return null;	
	return $a * 24;
}
function menit($a){
	if (!is_numeric($a)) return null;	
	return $a * 24 * 60;
}
function detik($a){
	if (!is_numeric($a)) return null;	
	return $a * 24 * 60 * 60;
}
?>
