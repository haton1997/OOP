<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/20/2018
 * Time: 23:22
 */

//2, Kế thừa trong PHP.
//Trong PHP để khai báo kế thừa từ một lớp cha chúng ta sử dụng từ khóa extends theo cú pháp:
class childClass extends parentClass
{
    //code
}

//VD
class ConNguoi
{
    var $chan;
    var $tay;
    var $mat;
    var $mui;

    function an()
    {

    }
}

//Lop Nguoi Lon
class NguoiLon extends ConNguoi
{
    var $longnach;
    function di()
    {

    }
    function noi()
    {

    }
}

//Lop Tre Con
class TreCon extends ConNguoi
{
    function bo()
    {

    }
}

//3, Kế thừa bắc cầu.
//VD Lop C Ke thua tu B va A
class A
{
    //class A
}
class B extends A
{

}
class C extends B
{
    //class C
}
//4, Gọi thuộc tính và phương thức của lớp cha.
class ParentClass
{
    function  getClass()
    {
        return'ParentClass';
    }
}
class ChildsClass extends ParentClass
{
    var $name = 'ChildsClass';
    function getclass()
    {
        return 'ChildsClass';
    }
    function getMethod()
    {
        echo 'Day laf pthuc an cua lop' . $this->getclass();

    }
    function getMethodParent()
    {
        echo "Day la pthuc an cua lop" . parent::getclass();
    }

}
$class = new ChildsClass();
$class->getMethod();
//kết quả: Đây là phương thức ăn của lớp Trẻ con
$class->getMethodParent();
//kết quả: Đây là phương thức ăn của lớp Nguoi Lon