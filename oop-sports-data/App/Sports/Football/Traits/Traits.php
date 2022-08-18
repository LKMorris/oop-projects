<?php

namespace Sports\Football\Traits;

trait Trait1
{
    public function method1()
    {
        echo 'foo';
    }
}

trait Trait2
{
    public function method2()
    {
        echo 'bar';
    }
}

trait Trait3
{
    use Trait1, Trait2;
}

class MyClass
{
    use Trait3;

    public function method3()
    {
        echo '3';
    }
}

$a = new MyClass();
$a->method3();