<?php
class bankAccount{
	public $email;
	public $pass;
	protected $balance;

	public $listAccount = [
		'0' => [
				 'email' => 'hapro955@gmail.com',
				 'pass' => '123'
			   ],
		'1' => [
				 'email' => 'thienmta@gmail.com',
				 'pass' => '123'
			   ]
	];
	public function authenticate(){
	for($i = 0;$i < count($this->listAccount);$i++){
		if(($this->listAccount[$i]['email'] == $this->email) && ($this->listAccount[$i]['pass'] == $this->pass)){
			return true;
		}
	}
	return false;
	}
}
?>