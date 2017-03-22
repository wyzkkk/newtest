<?php
echo 111;
class notest{
	public $age;
	public $name;
	public function __construct($age, $name){
		$this->age = $age;
		$this->name = $name;
	}
	public function index(){
		echo 'index111';
	}
	public function ajax(){
		echo 'json222';
	}

}
