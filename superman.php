<?php
// 外部ファイルの読み込み
require_once 'human.php';
require_once 'can_fly.php';

// スーパーマンの設計図
class SuperMan extends Human{ //Humanクラスを継承
    
    // トレイトの利用
    use CanFly;

    // プロパティ // 
    public $magic_power;  // 魔法力
    
    // コンストラクタ
    public function __construct($name, $age, $power, $magic_power){
        $this->name = $name;
        $this->age = $age;
        $this->power = $power;
        $this->magic_power = $magic_power;
        print "** " . $this->age. "歳のスーパーマン " . $this->name . "さんが、体力" . $this->power . "、魔法力" . $this->magic_power . "を持って生まれました。" . PHP_EOL;
        print "-------------------------" . PHP_EOL;
    }
    
    // メソッド //

    // 敵に魔法をかける
    public function magic_attack($enemy){
        $enemy->power = $enemy->power - 10;
        $this->magic_power = $this->magic_power -3;
        print $this->name . "さんが魔法を発動し、" . $enemy->name . "さんに10のダメージを与えました。" . PHP_EOL;
        print "これにより" . $this->name . "さんの魔法力が3減りました。" . PHP_EOL;
        $this->show_status();
        $enemy->show_status();
    }
    
    // オーバーライド
    // 現在のステータス表示
    public function show_status(){
        print "現在の" . $this->name . "さんの体力は" . $this->power . ", 魔法力は" . $this->magic_power . "です。" . PHP_EOL;
        print "-------------------------" . PHP_EOL;
    }
}