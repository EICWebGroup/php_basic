#PHP�ł�class�̎g����

###Sample Code

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

//class���Ăяo���Ƃ�java�ł�"myCar.whoIsThisCar();"�̌`�����APHP�ł�$������
$myclass = new Myclass(); //$myclass�̂Ƃ���͂��낦��

$myclass->test2();
```

###��ȗ���

* class�̒�`
* �ϐ��̐錾
* �֐��̒�`
* ���\�b�h�̐錾
* �I�u�W�F�N�g�̐���
* �Ăяo��

###java�Ƃ̈Ⴂ
* �ϐ���錾����Ƃ�public������K�v������
* �ϐ��̓��ɂ�$������
* �h�b�g.�ł͂Ȃ��A�A���[���Z�q->�œn��