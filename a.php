
<?php 
	class A
	{
		protected $color;
		protected $number;
		public function __construct($color, $number)
		{
			$this->color = $color;
			$this->number = $number;
		}
		public function getNumber()
		{
			return $this->number;
		}
		public function setNumber()
		{
			$this->number = $number;
		}
		public function getColor()
		{
			return $this->color;
		}
		public function setColor()
		{
			$this->color = $color;
		}
	}
	$a = new A('Red',4);
	echo $a->getNumber();
	trait B
	{
		public function b()
		{
			echo"Class B";
		}
	}
	trait C
	{
		public function c()
		{
			echo"Class C";
		}
	}
	class Test extends A
	{
		public $number;
		public $color;
		use B;
		use C;
		public function __construct($color, $number){
			$this->color = $color;
			$this->number = $number;
			$this->b();
			$this->c();
		}
	}
	
	$obj = new Test('Red',4);
	echo $obj->getColor();
 ?>

