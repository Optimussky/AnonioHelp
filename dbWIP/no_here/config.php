<?php
class Foo
{
    public $bar = 'property';
    
    public function bar() {
        return 'method';
    }
}

$obj = new Foo();
echo "This is my(bar): ".$obj->bar, PHP_EOL, "<br>This is my(bar()): ".$obj->bar(), PHP_EOL;