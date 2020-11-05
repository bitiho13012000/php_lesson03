<?php 
include "MyClass.php";
$hello = new MyClass(array(
    'username' => 'Nguyen Van A',
    'emai' => 'nguyenvanA@gmail.com',
    'password' => '123456',
));
$hello->name = "A";
echo $hello->name;
isset($hello->name);

$hello = new MyClass();
$hello -> notExistMethod();