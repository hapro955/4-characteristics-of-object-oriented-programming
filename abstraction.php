<?php
abstract class xe{
	abstract function banhXe();
	abstract function gheNgoi();
}

class xeDap extends xe{
	public function banhXe(){
		echo "banh xe dap";
	}
}
?>