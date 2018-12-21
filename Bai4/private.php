<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/21/2018
 * Time: 00:06
 */
//1, Khái quát chung.
//ba phạm vi: private, protected, public (Nếu không khai báo visibility thì mặc định nó sẽ là public)
//Khi khai báo kèm theo phạm vi thì chúng ta sẽ sử dụng cú pháp:
//2, Private.
//chỉ có thể sử dụng được trong class đó, bên ngoài class không thể nào có thể sử dụng được nó kể cả lớp kế thừa nó cũng không sử dụng được.
class Person
{
    //khai báo thuộc tính name ở private
    private $name;

    //Khai báo phương thức run ở private
    private function run()
    {
        return 'Đây là hàm run';
    }
    function setName($name)
    {
        $this->name=$name;
    }
    function getName()
    {
        return $this->name;
    }
    function getRunMethod()
    {
        return $this->name;
    }
}
//khi sử dụng private thì chúng ta không có thể gọi và truy cập vào nó từ bên ngoài class
//nếu như bạn muốn truy cập vào nó ở bển ngoài class thì bạn phải sử dụng các phương thức có visibility là public hoặc không khai báo visibility.


//Khởi tạo class
$person = new Person();
//set thuoc tinh name
$person->setName("Ha Ton");
//Lay thuoc tinh name
echo $person->getName();
//Goi gtri cua pt run
echo $person->getRunMethod();
