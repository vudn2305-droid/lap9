<?php

require_once("config.php");

$idPA=$_GET["idPA"];

$sql1="
UPDATE binhchon
SET SoLanChon=SoLanChon+1
WHERE idBC=1
";

$sql2="
UPDATE phuongan
SET SoLanChon=SoLanChon+1
WHERE idPA=$idPA
";

if(
mysqli_query($config,$sql1)
&&
mysqli_query($config,$sql2)
)
{
    header("Location: ketquabinhchon.php");
}
else
{
    echo "That bai";
}

?>