<?php 
// 人类(父类)
class Person{
	public $name;

	public function __construct($n){
		$this->name=$n;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}	
}

// it人员
class It{
	public $name;
	public $soft;

	public function __construct($n,$s){
		$this->name=$n;
		$this->soft=$s;
	}

	public function say(){
		echo "<p>my name is {$this->name}</p>";
	}

	public function soft(){
		echo "<p>{$this->name}正在开发{$this->soft}软件</p>";
	}
}

$obj=new It('小马','PHP');

$obj->say();
$obj->soft();

 ?>
