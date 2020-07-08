<?php
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test1() {
        static::who(); // Here comes Late Static Bindings
    }
    public static function test2() {
        self::who(); 
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test1();
B::test2();
// B::who();