<?php
class ConNguoi
{
    var $name = 'aa';
    var $mat;
    var $mui;
    const sochan = 2;

    function an()
    {
        return "an mi tom";
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
class cha extends ConNguoi
{
    public function chaan()
    {
        echo parent::an();
    }
}
// $connguoi = new ConNguoi();
// $connguoi->an();
// echo $connguoi->getSoChan();
$cha = new cha();
$cha->chaan();
?>