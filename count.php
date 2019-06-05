<html>

<head>
    <title>Đếm kí tự trong chuỗi PHP</title>
</head>
<body>

<?php
$string="hello Word";
$char="l";
$count="0";
for($i="0"; $i < strlen($string); $i++)
{
    if(substr($string,$i,1) == $char)
    {
        $count = $count+1;
    }
}
echo "Có " .$count. " kí tự " .$char. " trong chuỗi '" .$string. "'";
?>

</body>
</html>