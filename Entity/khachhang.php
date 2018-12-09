<?php

class khachhang
{
    var $makh;
    var $hoten;
    var $diachi;
    var $sdt;
    var $email;
    var $tendn;
    var $pass;
    var $quyen;
    /**
     * Constructor
     */
    function __construct($makh,$hoten,$diachi,$sdt,$email,$tendn,$pass,$quyen)
    {
        $this->makh = $makh;
        $this->hoten = $hoten;
        $this->diachi = $diachi;
        $this->sdt = $sdt;
        $this->email = $email;
        $this->tendn = $tendn;
        $this->pass = $pass;
        $this->quyen = $quyen;
    }
}
?>