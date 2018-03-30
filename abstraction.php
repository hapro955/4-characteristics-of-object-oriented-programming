<?php
abstract class xe{
	abstract function banhXe();
	abstract function gheNgoi();
}

class xeDap extends xe{
	public function banhXe(){
		echo "banh xe dap";
	}

	public function gheNgoi(){
		echo "yen xe dap";
	}
}

class xeMay extends xe{
	public function banhXe(){
		echo "banh xe may";
	}
}
?>