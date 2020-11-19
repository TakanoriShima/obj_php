<?php

trait CanFly {
    public function fly(){
        print $this->name . "さんが、大空を舞いました。" . PHP_EOL;
    }
}