<?php
class person{
	public $foot;
	public $hand;
	public $eye;
	public $nose;

	protected function eat(){
		echo "person eat";
	}
}

class adults extends person {
	public $bread;

	public function walk(){
		echo "adults walk";
	}

	public function getEat(){
		echo $this->eat();
	}
}
?>