<html>
    <head> <link rel="stylesheet" href="style.css"> </head>
<body>
<?php 
$name="Priyanshi sharma";
$date=date("Y-M-D-d  H:i:s:ms");
$ip= $_SERVER['REMOTE_ADDR']
$year=date("Y");
$month=date("m");
$prev_year=$year-1;
$next_year=$year+1;
if($month<7){
    echo "year $year-$next_year";
}
else {
    echo "year $prev_year-$year";

}
?>
<center>
<h1> Hello World </h1>
<p><?=$name?></p>
<p><?=$date?></p>
<p><?=$ip?></p>
</center>

</body>
</html>
