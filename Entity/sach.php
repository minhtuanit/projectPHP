<?php

class sach
{
    var $masach;
    var $tensach;
    var $soluong;
    var $gia;
    var $maloai;
    var $sotap;
    var $anh;
    var $ngaynhap;
    var $tacgia;
    var $noidung;
    /**
     * Constructor
     */
    function __construct($masach,$tensach,$soluong,$gia,$maloai,$sotap,$anh,$ngaynhap,$tacgia,$noidung)
    {
        $this->masach = $masach;
        $this->tensach = $tensach;
        $this->soluong = $soluong;
        $this->gia = $gia;
        $this->maloai = $maloai;
        $this->sotap = $sotap;
        $this->anh = $anh;
        $this->ngaynhap = $ngaynhap;
        $this->tacgia = $tacgia;
        $this->noidung = $noidung;
        
    }
}
?>