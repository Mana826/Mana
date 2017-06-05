<?php
  $name = 'sakurai';
  if ($name == 'sakurai'){
  	 echo '正解';
  }else{
  	echo '不正解';
  }

  echo '<br>';

  $name = 'sakurai';
  $age = 22;
  if($name == 'sakurai'){
  	if($age == 22){
  	echo '正解';
  }else{
  	echo '人違い';
   }
  }else{
  	echo '不正解';
  }

  echo '<br>';

  $num = 0;
  while($num <= 3){
  	echo $num;
  	// インクリメント
  	$num++; //$numの値を1ずつ増やす
  	//デクリメント
  	//$num--; //$numの値を-1ずつ減らす
  }
  echo '<br>';

 for($num = 0; $num <= 3; $num++){
 	echo $num;
 }

  echo '<br>';

  $sakurai = array('name' => 'hoge', 'nation' => 'japan', 'age' => 120);
   foreach($sakurai as $value){
        echo $value . " ";
   }
   //実行結果 : hoge japan 120 
   echo '<br>';

   $hoge = array('hoge', 'fuga', 'hogehoge');
   $count = count($hoge);
   for($i= 0; $i < $count; $i++){
   	 echo $hoge[$i] . ' '; 

   }

   echo '<br>';

   function add($a, $b){
   	$c = $a + $b;
   	return $c;
   }
   echo add(6,4);

   echo '<br>';

   function hoge($a, $b){
   	$c = $a * $b;
   	return $c;
   }
   echo hoge(6,4);
 ?>