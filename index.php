<?php
print_r($_GET);
$prime = $_GET["no"];
$flag=0;
for($i=2;$i<=($prime/2);$i++){
	if($prime/$i==0){
		$flag=1;
	}
}
if($flag==1){
	echo $prime." is not a prime number";

}else{
	echo $prime." is a prime number";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample Script</title>
</head>
<body>
	<form>
		<input type="text" name="no" placeholder="number here">
		<input type="submit" value="CHECK !!">
	</form>
</body>
</html>