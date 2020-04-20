<?php
    echo "Menggunakan Perulangan for<br>"; 
for ($i=1; $i<=5; $i++) {
    for ($j=1;$j<=$i;$j++) {  
   
      echo "$i"; 
      }
     echo "<br>";
    } 

echo "<br><br>";
echo "Menggunakan Perulangan while<br>"; 
$a=1;

while($a<=5){
    $b=1;
    while($b<=$a){
        echo "$a";
        $b++;
    }
echo "<br>";
$a++;
}

       ?> 