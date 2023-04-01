<?php

/*for($i=0; $i<10 ; $i++){
 for($j=0; $j<$i; $j++) {
    for ($k=0; $k<$j; $k++) {
echo "0";
}
echo "<br>";
}
}*/

$i=0;
$j=0;

while($i<10){
while($j<$i){
echo "0";
$j++;
}
echo "<br>";
$i++;
}
?>
