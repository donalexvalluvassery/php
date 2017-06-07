<?php

$array1 = array("Don" , "Lavanya" , "Rest of the class");
echo $array1[2];
echo "<br>";

print_r($array1);
$array2=array("Messi" => "best ever" , "Ronaldo" => "cheater");
echo "<br><hr>";
print_r($array2);
echo "<br><hr>";
echo $array2["Messi"];
$array2[]="End of debate";
echo $array2[0];
if(false || true){
	echo "sAME AS EVERY IF'S USED IN PROGRAMMIN LANGUAGES";
}
else{
	echo "Go AWAY";
}


for($i=0;$i<sizeof($array1);$i++){
	echo "<br><hr>";
	echo "Member  ".($i+1)." : ".$array1[$i];
}
echo "<hr><hr>";
foreach ($array1 as $key => $value) {
	echo $key." =>   ".$value;	
	echo "<br>";
}
$whilevar=sizeof($array1);
while($whilevar>0){
	echo "<br><hr>";
	echo $array1[$whilevar];
	$whilevar=$whilevar-1;
}

?>