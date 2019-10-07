<?php
echo "Mencari bilangan prima diantara 1-37 <br>";
for ($i = 1;$i<38;$i++){
    if ($i%2 != 0 && $i%3 != 0 && $i%5 != 0){
     echo "$i ";
    }
}