<h1>以迴圈生陣列</h1>

<?php

$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9:$j++){
        $nine=[]=$i. "x".$j. "=".($i+$j);
    }
};

print_r($nine);
echo "<br>";
echo $nine[76];



?>
<?php

$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9:$j++){
        $nine=[$i.$j]=$i. "x".$j. "=".($i+$j);
    }
};

print_r($nine);
echo "<br>";
echo $nine[76];



?>
<?php

$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9:$j++){
        $nine=[$i][$j]=$i. "x".$j. "=".($i+$j);
    }
};

print_r($nine);
echo "<br>";
echo $nine[7][6];



?>