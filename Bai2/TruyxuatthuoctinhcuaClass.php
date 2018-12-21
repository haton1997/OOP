<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/20/2018
 * Time: 22:42
 */

//TRUY XUẤT TRONG CLASS
//Để truy xuất các thuộc tính động trong class thì chúng ta dùng từ khóa this với cú pháp: $this->propertyName;
class ConNguoi{
    var $name;
    var $mat;
    var $mui;
    const sochan=2;

    function an()
    {

    }
    function noi($caunoi)
    {
        return $this->name = $caunoi;
    }
    //có thể truyền các argument vào hàm được
    function di()
    {

    }
//xây dựng thêm phương thức getSoChan có nhiệm vụ trả về soChan bên của lớp ConNguoi.
    function getSoChan()
    {
        return self::sochan;
    }
}

//Còn nếu muốn truy xuất thông tin của thuộc tính cố định trong class chúng ta sẽ sử dụng một trong 2 cú pháp sau:
self::propertyName;
//hoặc
className::propertyName;
//Nên dùng cách 1

//TRUY XUẤT NGOÀI CLASS
//Chia làm 2 loại
//Đối với thuộc tính động chúng ta sẽ sử dụng từ cú pháp
$newClass = new className();
$newClass->propertyName;
//khuyên dùng cách 2 vì viết nó sẽ tường minh, dễ đọc hơn.

//Đối với thuộc tính cố định(constant) chúng ta sẽ sử dụng cú pháp
className::propertyName;

//gọi các thuộc tính động và cố định trong lớp ConNguoi.
//Khởi tạo lớp
$cha = new ConNguoi();
//Gọi các thuocj tính động
$cha->name;
//goi mui
$cha->mui;
//Gọi các thuocj tính cố định constant
ConNguoi::sochan;