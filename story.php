<?php

// 人間の設計図を読み込み
require_once 'human.php';

// shima 誕生
$shima = new Human("島", 48, 20);

// hanako誕生
$hanako = new Human("花子", 17, 30);

// shima が hanako を攻撃した
$shima->attack($hanako);

// hanakoが食べた
$hanako->eat();

// hanakoがshimaを攻撃した
$hanako->attack($shima);

// shimaが気晴らしにドライブした
$shima->drive();

// hanakoが気晴らしにドライブしようとした
$hanako->drive();

// shimaが走った
$shima->run();

// shimaが走った
$shima->run();

// 島が走った
$shima->run();

// shimaが走った
$shima->run();

// shimaが食べた
$shima->eat();

// shimaが一日を終えた
$shima->bye();

// hanakoが一日を終えた
$hanako->bye();