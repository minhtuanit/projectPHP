<?php
class ItemInCart
{
    var $masach;
    var $tensach;
    var $soluong;
    var $gia;
    var $maloai;
    var $anh;
    var $tacgia;

    function __construct($masach, $tensach, $soluong, $gia,$maloai,$anh,$tacgia)
	{
	    $this->masach = $masach;
	    $this->tensach = $tensach;
	    $this->soluong= $soluong;
	    $this->gia = $gia;
	    $this->maloai = $maloai;
	    $this->anh = $anh;
	    $this->tacgia = $tacgia; 
	}
}
?>