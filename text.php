<?php 
function ucgen($sayı){
   for($i = 0; $i <= $sayı; $i++){
        for($j = 0; $j <= $i; $j++){
            echo '0';
        }
        echo '<br>';
   }
}

echo ucgen(15);