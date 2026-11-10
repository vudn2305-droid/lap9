<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "review",
    3307
);

if($conn)
{
    echo "KET NOI THANH CONG";
}
else
{
    echo mysqli_connect_error();
}

?>