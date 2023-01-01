Fun number splitting<br>
<form action="#" method="get">
<h2>目标数(不要太大否则可能失败): <input type="number" name="a"><br>
多个数(不要超过10个否则可能卡死): <input type="number" name="b"><br>
<input type="submit"></h2>
</form>
<?php
/*
~ORDYLAN~
Github: https://github.com/ordylan/Fun-number-splitting
*/
function getf($n){
$fuhao = array('+',"-","*","/");
$n = $n % 4;
return $fuhao[$n];
}
//$number = array(1,2,3,4);
$number1 = $_GET["b"];
for($i = 0; $i < strlen($number1); $i++){
$number[$i] = $number1[$i];
}
//$tonum = 6;
$tonum = $_GET["a"];
$t = 0;
$total = 0;
$fixbug = 0;

if($_GET["a"] && $_GET["b"]){
for ($i = 0; $i < count($number); $i++) {
//$shizi = $shizi.$number[0].getf(floor($i/16)).$number[1].getf(floor($i/4)).$number[2].getf($i).$number[3];

$abaa = '.getf(floor($i/'.pow(4,count($number)-$i-2).')).';
if($i == (count($number)-1)){
    $abaa =";";
}
$shizi11 = $shizi11.'$number['.$i.']'.$abaa;
}

//echo $shizi11;
for ($i = 0; $i < pow(4,count($number)); $i++) {
//for ($a = 0; $a < count($number); $a++) {
//$t++;
//$shizi = $number[0].getf(floor($i/16)).$number[1].getf(floor($i/4)).$number[2].getf($i).$number[3];  //示例


$shizi = eval("return $shizi11;");
//}

if(strstr($shizi, "/0")){$shizi = "";}



$shizia = eval("return $shizi;");
//$aashizi=$aashizi."<br>".$shizi."=".$shizia;

if($shizia == $tonum && $fixbug == 0){
    if($shizi==$fixbug2){
        $fixbug = 1;
        $shizi = "";
        echo $total."个<br>".$echoo;
        return;
    }
    else$total++;
    if($total == 1){
        $fixbug2=$shizi;
    }
    if($shizi) $shizi = $tonum."=".$shizi;
    $echoo = $echoo.$shizi."<br>";
}

}
}
echo $total."个<br>".$echoo;
//echo $aashizi;
?>
