#PHP‚Å‚Ìclass‚Ìg‚¢•û
##2014//7/7


class MyClass {
	
	public $a;  //•Ï”‚ğéŒ¾‚·‚é‚Æ‚« public $•Ï”–¼
	public $b;
	
	public function test1(){
		$this->a = "hello"; //$
	}
	
	public function test2(){
		$this->test1(); //
		echo $this->a; //
	}
}

$myclass = new Myclass();

$myclass->test2();