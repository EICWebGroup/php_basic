#PHP�ł�class�̎g����


```
class MyClass //class�̒�`
{
	
	public $a;  //�ϐ��̐錾 public $var �ϐ��Ȃ̂œ���$������
	public $b;
	
	public function test1() //�֐��̒�`
	{
		$this->a = "hello"; //���\�b�h�̐錾 $this->var java�ł�.�����APHP�ł̓A���[���Z�q->
	}
	
	public function test2()
	{
		$this->test1(); //�I�u�W�F�N�g�̐���
		echo $this->a; //
	}
}

$myclass = new Myclass(); //class���Ăяo���Ƃ�java�ł�"myCar.whoIsThisCar();"�̌`�����APHP�ł�$������

$myclass->test2();
```

* class�̒�`
* �ϐ��̐錾
* �֐��̒�`
* ���\�b�h�̐錾
* �I�u�W�F�N�g�̐���
* �Ăяo��
