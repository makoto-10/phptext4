<?php
//練習問題１
echo '<mata charset="utf-8">'

$res = 50;
$a = 30;
$b = 80;
$c = 100;

if($res >= $a && $res < $b){
    echo '普通';
}elseif($res >= $b){
    echo '優秀';
}elseif($res < $a){
    echo '赤点';
}elseif($res > $c || $res < 0){
    echo 'エラー';
}

?>