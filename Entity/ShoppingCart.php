<?php

class ShoppingCart
{
	var $listBook;

	function __construct()
	{
		$this->listBook = array();
	}

	function addItem($itemInCart){
		foreach ($this->listBook as $value){
		    if(strcmp($value->masach,$itemInCart->masach) == 0 && $value->gia != 0 ){
		        $value->soluong += $itemInCart->soluong;
		       
				return;
			}
		}

		$this->listBook[] = $itemInCart;
	}
	function addItem1($itemInCart){
		foreach ($this->listBook as $value){
		    if(strcmp($value->masach,$itemInCart->masach) == 0 && $value->gia != 0 ){
		        $value->soluong = $itemInCart->soluong;
		       
				return;
			}
		}

		$this->listBook[] = $itemInCart;
	}
}
?>