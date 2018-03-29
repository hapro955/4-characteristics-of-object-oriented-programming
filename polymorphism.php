<?php
	interface action{
		public function run();
	}

	interface appearance{
		public function hair();
	}

	class animals implements action, appearance{
		publci function run(){
			echo "animals run";
		}
		public function hair(){
			echo "bad hair";
		}
	}
?>