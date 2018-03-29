<?php
interface action{
	public function run();
}

interface appearance{
	public function hair();
}

class animals implements action, appearance{
	public function run(){
		echo "animals run";
	}
	public function hair(){
		echo "bad hair";
	}
}

class human implements action{
	public function run(){
		echo "person run";
	}
}

$animal = new animals();
echo $animal->run();
echo $animal->hair();
$human = new human();
echo $human->run();
?>