<?php

//定义一个Car类并实例化一个对象
class Car {
    //定义属性
    public $name = '汽车';

    //定义方法
    public function getName() {
        //方法内部可以使用$this伪变量调用对象的属性或者方法
        return $this->name;
        echo $name;
    }
}
$car= new Car();
$car->getName;
