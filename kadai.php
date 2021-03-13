<?php

// 課題
    // <img src = " "/>
    // if文を使う。mt_rand(,);を使う

$omi = mt_rand(1,4);
if("$omi" == 1){
    echo '<img src = "img/daikichi.jpg"/>';
}else if("$omi" == 2){
    echo '<img src = "img/kichi.jpg"/>';
}else if("$omi" == 3){
    echo '<img src = "img/syokichi.jpg"/>';
}else if("$omi" == 4){
    echo '<img src = "img/daikyo.jpg"/>';
};
?>