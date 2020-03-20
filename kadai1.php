<?php
$name = "大野翔也";
if ($name = "大野翔也") {
    echo "私は大野翔也です。";
}   else {
    echo "私は大野翔也ではありません。";
}

$answer = 0;
for($i = 1; $i <=10000; $i++) {
    $answer += $i;
}
echo $answer;

$fruits = array("apple","orange","banana","grape","peach");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0) {
    echo $i;
    echo "\n";
    }
}