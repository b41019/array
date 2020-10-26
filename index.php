<h1>陣列宣告</h1>
<hr>
<p>$a=array();</p>
<p>print_r($a);</p>
<p>var_dump($a);</p>

<?php
$a=array();
echo"print_r";
print_r($a);
echo "<br>";
echo "var_dump=";
var_dump ($d);
echo "<br>";

?>

<hr>
<h1>陣列宣告給值</h1>
<hr>
<p>$a=[1,2,3];</p>
<p>$a=[1];</p>
<p>$a=[2];</p>
<p>$a=[3];</p>

<?php
$a=[1,2,3];
print_r($a);
$b[]=1;
$b[]=2;
$b[]=3;
print_r($b);
echo "<br>";
$c['A01']="張大同";
$c['A02']="王曉明";
$c['B07']="趙強";
print_r($c);


?>

<h1>陣列的使用</h1>
<hr>

<?php
echo $a[1];
$a[1]=1232132132;
echo "<br>";
echo $a[1];
echo "<br>";
echo $c['B07'];
// 幫你叫出"c"裡的key值"B07"的資料

?>

