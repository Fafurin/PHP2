<?php
class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;// скобки не поставлены, т.к. у классов А и В нет конструкторов
$b1 = new B;// результат такой же, как и в 6 задании
$a1->foo();//1
$b1->foo();//1
$a1->foo();//2
$b1->foo();//2