<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/21/2018
 * Time: 00:08
 */
class Person
{
    //khai báo thuộc tính xe dạng protected
    public $name;

    function setName($name)
    {
        //đúng vì sử dụng trong class con
        $this->name = $name;
    }

    function getName()
    {
        //đúng vì sử dụng trong class con
        return $this->name;
    }
}

//khởi tạo lớp Person
$person = new Person();
//tác động vào thuộc tính name
$person->name = 'HA';
//tác động vào biến name qua hàm setName
$person->setName('HA');
echo $person->getName();