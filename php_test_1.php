<?php

$total = 0;
echo $total;

for ($i = 0; $i <= 100; $i++) {
    $total += $i;
}
echo $total;

$animals = array("dog", "cat", "panda");

foreach($animals as $animal){
    echo "要素は" . $animal;
    echo "\n";
}

#課題1
$name = "reo";

$name = "taro";
if ($name == "reo") {
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
}

#課題2
$total = 0;
echo $total;

for ($i =0; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;

#課題3
$fruits = array("さくらんぼ", "メロン", "梨", "葡萄", "桃");

foreach($fruits as $fruit){
    echo "好きなフルーツは" . $fruit;
    echo "\n";
}

#課題4

for($i = 1; $i <= 100; $i++){
    
    //5で割り切れたら{}内を実行する
    if($i % 5 == 0){
        echo $i;
        echo "\n";
    }
}