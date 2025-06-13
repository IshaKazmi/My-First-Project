
<?php
$con = mysqli_connect('localhost', 'root', '', 'mystore');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connection successful"; // Uncomment only for debugging
?>
