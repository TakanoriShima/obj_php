<?php

// 外部ファイルの読み込み
require_once 'can_fly.php';

// 鳥の設計図
class Bird{
    
    use CanFly;
    // プロパティ // 
    public $name; // 名前
    
    // コンストラクタ //
    public function __construct($name){
        $this->name = $name;
        print 'かわいい鳥の' . $this->name . "ちゃんが誕生しました。" . PHP_EOL; 
        print "-------------------------" . PHP_EOL;
    }
    
    // さえずる
    public function cry(){
        print "鳥の" . $this->name . "さんが、「ピヨピヨ」とさえずりました。" . PHP_EOL;
    }
    
}