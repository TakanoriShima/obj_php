<?php

    // 外部ファイルの読み込み
    require_once 'superman.php';
    require_once 'bird.php';
    
    // スーパーマン誕生
    $superman = new SuperMan("スーパーマン", 35, 50, 100);
    
    // shima誕生
    $shima = new Human("島", 48, 30);
    
    // bird誕生
    $piyo = new Bird("ぴよ");
    
    // superman 走る
    $superman->run();
    
    // superman ドライブする
    $superman->drive();
    
    // shima　攻撃する
    $shima->attack($superman);
    
    // superman 魔法攻撃
    $superman->magic_attack($shima);
    
    // bird 空を飛ぶ
    $piyo->fly();
    //$pipy->show_status();
    
    // superman 空を飛ぶ
    $superman->fly();
    $superman->show_status();
    
    // shimaが一日を終えた
    $shima->bye();
    
    // supermanが一日を終えた
    $superman->bye();
        
    