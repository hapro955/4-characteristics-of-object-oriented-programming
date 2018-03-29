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
	public function setBalance($balance){
		if($this->authenticate() == true){
			$this->balance = $balance; 
		}else{
			echo "error!";
		}	
	}
	public function getBalance(){
		return $this->balance;
	}
}

$account = new bankAccount();
$account->email="hapro955@gmail.com";
$account->pass="123";
echo $account->email;
$account->setBalance(1000000000);
echo $account->getBalance();

?>