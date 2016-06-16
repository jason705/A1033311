<?php
include_once("config.php");
if($_GET['location']=='Taipei'){
	$no=1;
}
if($_GET['location']=='Tainan'){
	$no=3;
}
if($_GET['location']=='Kaohsiung'){
	$no=2;
}
$sql = "SELECT area_name FROM Area WHERE `city_no` = '".$no."'";
$result=mysqli_query($conni,$sql);
$rs = mysqli_num_rows($result);
echo "<select name='area'>";
while($res=mysqli_fetch_array($result)){
echo "<option value='".$res[0]."'>".$res[0]."</option>";
}
echo "</select>";
?>
