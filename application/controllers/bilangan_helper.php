</body>
</html>
Masukan angka berapa saja :
<?php
function ganjil($a){
	if ($a%2==1) {
	return "Bilangan Ganjil";
}	
else {
	return "Bukan Bilangan Ganjil";
}
}
function genap($a){
	if ($a%2==0) {
	return ("Bilangan Genap");
}
else {
	return "Bukan Bilangan Genap";
}
}
function prima($a){
	if ($a%2==1) {
	return "Bilangan Prima";
}
else {
	return "Bukan Bilangan Prima";
}
}
function kel2($a){
	if ($a%2==0) {
	return "Bilangan Kelipatan 2";	
}
else {
	return "Bukan Bilangan Kelipatan 2";
}
}