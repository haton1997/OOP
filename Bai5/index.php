<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/21/2018
 * Time: 00:11
 */
//1Tính Kế thừa (inheritance).

//2Tính đa hình (polymorphism).
class Hinh
{
    protected function tinhDienTich()
    {

    }
}
class HinhVuong extends Hinh
{
    private $canh;

    public function setCanh($canh)
    {
        $this->canh = $canh;
    }

    public function getCanh()
    {
        return $this->canh;
    }

    //Tinh dien tich
    public function tinhDienTich()
    {
        return pow($this->canh, 4);
    }
}
class HinhTron extends Hinh
{
    private $bankinh;

    public function setBanKinh($bankinh)
    {
        $this->bankinh = $bankinh;
    }

    public function getBanKinh()
    {
        return $this->bankinh;
    }

    //xử lý tính diện tích của hình tròn
    public function tinhDienTich()
    {
        return (pow($this->bankinh, 2) * pi());
    }
}
$hinhvuong=new HinhVuong();
$hinhvuong->setCanh(4);
echo $hinhvuong->tinhDienTich();

echo '<br/> ___________________________________________________ <br/>';
$hinhtron = new HinhTron();

$hinhtron->setBanKinh(4);

echo $hinhtron->tinhDienTich();
//3Tính đóng gói (encapsulation).
//4Tính trừng tượng (abstraction).