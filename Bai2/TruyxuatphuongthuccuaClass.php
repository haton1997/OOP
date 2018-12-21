<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/20/2018
 * Time: 23:00
 */
//Truy xuất trong class.
$this->methodName();
//hoặc nếu có các argument
$this->methodName(argument);

class ConNguoi
{
    var $name = 'aa';
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        //code
    }

    function noi()
    {
        return $this->getSoChan();
    }

    function di()
    {
        //code
    }

    function getSoChan()
    {
        return self::sochan;
    }
}

//Truy xuất ngoài class.
$newClass = new className();
$newClass->methodName;

//Vidu
$connguoi = new ConNguoi();
$connguoi->noi();