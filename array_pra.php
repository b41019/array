<h1>威力採</h1>

<?php

// 亂樹涵是rand(x,y)
$lotto=[];

while(count($lotto)<6){
    $t=rand(1,49);
    if(!in_array($t,$lotto)){
        $lotto[]=$t;
    }
}

echo "<pre>";
print_r ($lotto);
echo "</pre>";
// for($i=0,$i<=6,$i++){
    
    // }
    // echo rand(1,49);
    ?>

<h3>威力採</h3>
    <?php
    $lotto=[];
    $second=rand(1,8);
        while(count($lotto)<6){
            $t=rand(1,38);
            if(!in_array($t,$lotto)){
                $lotto[]=$t;
            }
        }
        $lotto[]=$second;
        echo "<pre>";
        print_r ($lotto);
        echo "</pre>";
        ?>

    <h1>兌獎</h1>
    中獎馬: <br>
     第一組:08,15,21,24,26,30;<br>
     第二組:07 <br>
    <?php
    $treasure_1=[8,15,21,24,26,30];
    $treasure_2=7;
    $lotto=[];
    $second=rand(1,8);
        while(count($lotto)<6){
            $t=rand(1,38);
            if(!in_array($t,$lotto)){
                $lotto[]=$t;
            }
        }
        $lotto[]=$second;
        echo "<pre>";
        print_r ($lotto);
        echo "</pre>";


        $l2=array_pop($lotto);
        if($l2==$treasure_2){
            $res_2=1;
        }else{
            $res_2=0;
        }

        foreach($treasure_1 as $t){
            foreach($lotto as $l){
                if($t==$l){
                    $res_1=$res_1+1;git log
                }
            }
        }

        echo "第一組種了". $res_1. "個號碼<br>";
        echo "第二組種了". $res_2. "個號碼<br>";
        ?>

