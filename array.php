<?php

// arrayとは"配列"のこと
// 配列の基礎的なコード

$a = array("Apple","Mango","Orange","Watermelon");

echo $a[0] . "<br>\n";  // Apple は表示します
echo $a[1] . "<br>\n";  // Mango は表示します
echo $a[2] . "<br>\n";  // Orange は表示します
echo $a[3] . "<br>\n";  // Watermelon は表示します
echo $a[4] . "<br>\n";  // エラー です


// $配列名 =  array("キー" => 値)

 	$result_list=array();//空の配列を宣言

	$obj = array(
			"title" = "タイトル",
			"body"	= "本文"
		);
	array_push($result_list, $obj);//$result_listに$objを追加
	
	foreach($result_list as $item){
		echo "<li class='hit'><pre>{$item["body"]}</pre></li>";
	}