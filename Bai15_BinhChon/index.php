<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Bình chọn</title>
</head>

<body>

<h2>BÌNH CHỌN</h2>

<form method="get" action="xulybinhchon.php">

Bạn nghĩ sao về chất lượng website UTE?

<br><br>

<?php

require_once("config.php");

$sql="select * from phuongan where idBC=1";

$kq=mysqli_query($config,$sql);

$i=0;

while($row=mysqli_fetch_array($kq))
{
?>

<input
type="radio"
name="idPA"
value="<?php echo $row['idPA'];?>"

<?php
if($i==0)
{
    echo "checked";
    $i++;
}
?>
>

<?php echo $row['MoTa']; ?>

<br>

<?php
}
?>

<br>

<input
type="submit"
value="Xem kết quả">

</form>

</body>
</html>