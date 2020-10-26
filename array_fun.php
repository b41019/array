<h1>陣列寒士</h1>
<h3>is_array()</h3>
<?php

$a=[1,2,3];
$b= "天氣";
echo '$a=> '.is_array ($a);
echo "<br>";
echo "b=>".is_array($b);
echo "<br>";

if(is_array($a)){
    echo '$a is an array';
}else{
    echo '$a is not an array';
}
?>

<h3>in_array()</h3>
$a=['A','B','c','D','E'];

<?php
$a=['A','B','c','D','E'];
echo in_araay('c',$a);
if(in_array('c',$a)){
    echo 'C有在陣列$a中';
}else{
    echo 'C沒有在陣列$a中';
}

?>

<h3>sort()</h3>
$a=['D','B','A','E','C'];
<?php
$a=['D','B','A','E','C'];
print_r($a);
echo "<br>";
sort($a);
print_r($a);
echo "<br>";
?>


$a=[
    '國文'=>'D',
    '國文'=>'D',
    '國文'=>'D',
    '國文'=>'D',    
]

<h3>array_fill()</h3>
<?php

$a=array_fill(0,50,'我很帥');
echo "<pre>";
print_r ($a);
echo "</pre>";

?>

<h3>array_search</h3>

<?php
$a=[
    '國文'=>'d',
    '英'=>'b',
    '數'=>'a',
    '地'=>'c',
    '歷'=>'e',
];
    echo array_search('a',$a);
    echo "<br>";
    
    $a=['d','b','a','a','e'];
    echo array_search('a',$a);
    // array_search 幫你找陣列特定資料位置,若有重複,舊只找第一筆
    
    ?>

<h3>array_keys()</h3>

<?php

$a=[
    '國文'=>'d',
    '英'=>'b',
    '數'=>'a',
    '地'=>'c',
    '歷'=>'e',
];
$keys=array_keys($a);
echo "<pre>";
print_r ($keys);
echo "</pre>";
?>

<h3>array_merge()</h3>
<?php
$a=[1,2,3];
$b=['a','b','c'];

$c=array_merge($a,$b);

echo "<pre>";
print_r ($c);
echo "</pre>";

$a=array_merge($a,$b);
echo "<pre>";
print_r ($a);
echo "</pre>";

?>
<h3>serialize()</h3>
<?php
$a=[
    '國文'=>'d',
    '英'=>'b',
    '數'=>'a',
    '地'=>'c',
    '歷'=>'e',
];

echo serialize($a);
?>

<h3>implode</h3>
<?php

$a=[
    '國文'=>'d',
    '英'=>'b',
    '數'=>'a',
    '地'=>'c',
    '歷'=>'e',
];
$result=implode(',',$a);
echo $result;

print_r(explode(','=$result));
?>


<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
