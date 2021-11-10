<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A { // класс B наследует от класса А публичный метод со статичным свойством
}                   // $x класса А не равен $x класса B, это разные статичные свойства
$a1 = new A();
$b1 = new B();
$a1->foo();//1
$b1->foo();//1
$a1->foo();//2
$b1->foo();//2