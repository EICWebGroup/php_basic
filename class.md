#PHP�ł�class�̎g����
##2014//7/7


class MyClass {
	
	public $a;  //�ϐ���錾����Ƃ� public $�ϐ���
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