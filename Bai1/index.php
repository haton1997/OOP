<?php
class Sinhvien{
    private $name="Tôn Văn Hà";
    private $age=21;
    public function getSinhvien()
    {
        return $this->name .'-'. $this->age;
    }
}
?>