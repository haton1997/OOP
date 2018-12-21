<?php
/**
 * Created by PhpStorm.
 * User: HaTon
 * Date: 12/21/2018
 * Time: 00:07
 */
//3, Protected.
class Persons
{
    protected $name;
}

class Male extends Persons
{
    function setName($name)
    {
        $this->name=$name;
    }
    function getName()
    {
        return $this->name;
    }
}
//Khoi tao lop Person moi;
$persons=new Persons();

$male=new Male();
$male->setName('Ha');
echo $male->getName();
