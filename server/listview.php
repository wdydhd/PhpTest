<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (!empty($_POST["test"])){
$test=$_POST["test"];
$section=$_POST["section"];
$section=intval($section);
$ret = array();
for($y=0;$y<$section;$y++){
$sectionarr=array();
for($x=0;$x<5;$x++){
$sectionarr[]=$test.$x.$x.$x;
}
$ret["section is :".$y]=$sectionarr;
}
echo json_encode($ret);
}
}

if ($_SERVER["REQUEST_METHOD"] == "GET"){
$test = $_GET["test"];
$section=$_GET["section"];
$section=intval($section);

$ret = array();
for($y=0;$y<$section;$y++){
$sectionarr=array();
for($x=0;$x<5;$x++){
$sectionarr[]=$test.$x.$x.$x;
}
$ret["section is :".$y]=$sectionarr;
}
echo json_encode($ret);

echo readfile ("test");

$myfile = fopen("test","r") or die ("none!");
echo fread($myfile,filesize(test));
fclose($myfile);


}







?>
