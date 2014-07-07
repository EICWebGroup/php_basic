#PHPでのclassの使い方


```
class MyClass //classの定義
{
	
	public $a;  //変数の宣言 public $var 変数なので頭に$がいる
	public $b;
	
	public function test1() //関数の定義
	{
		$this->a = "hello"; //メソッドの宣言 $this->var javaでは.だが、PHPではアロー演算子->
	}
	
	public function test2()
	{
		$this->test1(); //オブジェクトの生成
		echo $this->a; //
	}
}

$myclass = new Myclass(); //classを呼び出すときjavaでは"myCar.whoIsThisCar();"の形だが、PHPでは$をかく

$myclass->test2();
```

* classの定義
* 変数の宣言
* 関数の定義
* メソッドの宣言
* オブジェクトの生成
* 呼び出し
