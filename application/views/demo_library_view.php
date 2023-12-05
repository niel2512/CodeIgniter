<html>
<head><title> Demo Menggunakan Library</title></head>
<body>
<h2>Demo Menggunakan Library</h2>
<?php
//menggunakan library table.php
$this->table->set_heading($data['heading']);

$this->table->add_row($data['row1']);
$this->table->add_row($data['row2']);
$this->table->add_row($data['row3']);
$this->table->add_row($data['row4']);
$this->table->add_row($data['row5']);
$this->table->add_row($data['row6']);
$this->table->add_row($data['row7']);
$this->table->add_row($data['row8']);

echo $this->table->generate();
?>

</body>
</html>