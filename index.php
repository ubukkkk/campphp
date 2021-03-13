<?php

// ブラウザを更新(リロード)して表示されているかチェック

// 演習1
    echo "phpの勉強をしています";
    echo "<br>";

    // 演習2
    echo "<p>"."5 + 7"."</p>";
    echo "<br>";
    echo 5+7;
    echo "<br>";
    echo "<br>";

    // 変数の作り方
    $name = "変数を作る";
    echo $name;
    echo "<br>";

    // 演習3
    $apple = "りんご";
    $num = 10 + 10;
    // $num = 10;
    echo $apple;
    echo "<br>";
    echo $num;
    echo "<br>";
    // echo $num + $num;

    // 演習4
    $a = 1;
    $b = 2;
    if($a === 1){
        echo "1が表示されました"."<br>";
    }
    if($b === 2){
        echo "2が表示されました";
        echo "<br>";
    };

    // 演習5
    // 乱数の範囲を指定し、1~6の間で乱数を生成
    
    echo mt_rand(1, 6);

    // mt_rand();これが関数

    
    // $daikichi = 1;
    // $kichi = 2;
    // $syokichi = 3;
    // $daikyo = 4;
    $omi = mt_rand(1,4);
    // $daikichi = <img src="img/01.jpg" alt="">;
    // echo <img src="img/01.jpg" alt="">;
    
    // if("$omi" === 1){
    //     echo "daikichi.jpg";
    // }else if("$omi" === 2){
    //     echo "syokichi.jpg";
    // }else if("$omi" === 3){
    //     echo "kyo.jpg";
    // }else if("$omi" === 4){
    //     echo "daikyo.jpg";
    // };
?>