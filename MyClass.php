<?php 
class MyClass
{
    public function __construct(...$args)
    {
        var_dump($args);
    }
    public function __destruct()
    {
        echo 'thuc thi khi doi tuong bi huy <br/>';
    }
    public function __set($key, $value)
    {
        echo "key: $key - value: $value <br/>";
    }
    public function __get($key)
    {
        echo "thuoc tinh vua goi ko ton tai hoac private $key <br/>";
    }
    public function __isset($name)
    {
        echo "thuoc tinh kiem tra ko ton tai $name <br/>";
    }
    public function __call($method_name,$parameter)
    {
        echo "$method_name \n";
        var_dump($parameter);
    }
}
