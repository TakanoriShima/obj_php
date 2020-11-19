<?php 
// 人間の設計図
class Human{
    
    // プロパティ //
    public $name; // 名前
    public $age; // 年齢
    public $power; // 体力
    
    // コンストラクタ //
    public function __construct($name, $age, $power){
        $this->name = $name;
        $this->age = $age;
        $this->power = $power;
        print "** " . $this->age. "歳の" . $this->name . "さんが、体力" . $this->power . "を持って生まれました。" . PHP_EOL;
        print "-------------------------" . PHP_EOL;
    }
    
    // メソッド // 

    // 走る
    public function run(){
        if($this->power >= 5){
            $this->power = $this->power - 5;
            print $this->name . "さんは走って、体力を5失いました。" . PHP_EOL;
            $this->show_status();
        }else{
            print $this->name . "さんは体力不足のため、もう走れません。" . PHP_EOL;
            print "エネルギー補給をしましょうね！" . PHP_EOL;
            print "-------------------------" . PHP_EOL;
        }
    }

    // 食べる    
    public function eat(){
        $this->power = $this->power + 10;
        print $this->name . "さんは、おいしいものをたくさん食べて、体力を10回復ました。" . PHP_EOL;
        $this->show_status();
    }
    
    // ドライブする
    public function drive(){
        if($this->age >= 18){
            $this->power = $this->power + 5;
            print $this->name . "さんは、ドライブで気分転換をして、体力を5回復ました。" . PHP_EOL;
            $this->show_status();
        }else{
            print $this->name . "さん、だめですよ。" . PHP_EOL;
            print "18歳未満のため運転できません" . PHP_EOL;
            print "あと、" . (18 - $this->age) . "年だけ待ってくださいね　^^" . PHP_EOL;
            print "-------------------------" . PHP_EOL;
        }    
    }
    
    // 誰かを攻撃する
    public function attack($enemy){
        $damage = mt_rand(1, 10);
        print $this->name . "さんが" . $enemy->name . "さんを攻撃して" . $damage . "の体力を奪いました。" . PHP_EOL;
        $enemy->power = $enemy->power - $damage;
        print "これにより" . $this->name . "さんの体力も2減りました。" . PHP_EOL;
        $this->power = $this->power - 2;
        $this->show_status();
        $enemy->show_status();
    }
    
    // 今日一日を終える
    public function bye(){
        print $this->name . "さんはもう寝床につきます。Good Night! " . PHP_EOL;
        $this->show_status();
        print "Good Night!" . PHP_EOL;
        print "**-------------------------" . PHP_EOL;
        
    }
    
    // 現在のステータス表示
    public function show_status(){
        print "現在の" . $this->name . "さんの体力は" . $this->power . "です。" . PHP_EOL;
        print "-------------------------" . PHP_EOL;
    }
}