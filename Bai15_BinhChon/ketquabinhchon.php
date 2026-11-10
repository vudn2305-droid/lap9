<?php
require_once("config.php");
?>

<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8">
<title>Kết quả bình chọn</title>
</head>

<body>

<table border="1" width="500">

<?php

$sql="select * from binhchon where idBC=1";

$kq=mysqli_query($config,$sql);

$row=mysqli_fetch_array($kq);

$mota=$row["MoTa"];

$sql="
select sum(SoLanChon)
as tong
from phuongan
where idBC=1
";

$kq=mysqli_query($config,$sql);

$row=mysqli_fetch_array($kq);

$tong=$row["tong"];

?>

<tr>
<td colspan="3">
<?php echo $mota; ?>
</td>
</tr>

<?php

$sql="
select * from phuongan
where idBC=1
";

$kq=mysqli_query($config,$sql);

while($row=mysqli_fetch_array($kq))
{

if($tong>0)
{
    $phantram=
    ($row["SoLanChon"]/$tong)*100;
}
else
{
    $phantram=0;
}

?>

<tr>

<td>
<?php echo $row["MoTa"]; ?>
</td>

<td>
<?php echo round($phantram,2); ?> %
</td>

<td>
<?php echo $row["SoLanChon"]; ?>
</td>

</tr>

<?php
}
?>

</table>

</body>
</html>