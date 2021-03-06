<?php
  //練習問題1
  //文字列連結を用いて、自分の名前をブラウザ上に表示する。
  $first_name = 'Takai';
  $last_name = 'Mana';
  echo $first_name.$last_name;

  //練習問題2
  //以下の計算をそれぞれ行い、ブラウザ上に表示する。
  //8 * 3の計算
  echo "<br>";
  echo 8 * 3;

  //24 / 8の計算
  echo "<br>";
  echo 24 / 8;

  //6 + 10の計算
  echo "<br>";
  echo 6 + 10;

  //6 - 10の計算
  echo "<br>";
  echo 6 - 10;

  //10 % 7の計算
  echo "<br>";
  echo 10 % 7;

  //練習問題3
  //下記のプログラムのコメント部分をそれぞれ実行し、ブラウザ上に表示する。
  //※自己代入演算子を用いること
  $var = 2;
  //$varに12を足す
  echo "<br>";
  echo $var += 12;

  //$varに7で割る
  echo "<br>";
  echo $var /= 7;

  //$varに5を掛ける
  echo "<br>";
  echo $var *= 5;

  //$varの3の剰余
  echo "<br>";
  echo $var %= 3;

  //練習問題4
  //配列内に、伊達、櫻井、伊藤、藤尾を入れて、ブラウザ上にそれぞれを表示せよ。
  echo "<br>";
  $list = array('伊達', '櫻井', '伊藤', '藤尾');
  echo $list[0];
  echo $list[1];
  echo $list[2];
  echo $list[3];

  //練習問題5
  //連想配列内に、nameキーに'櫻井'、ageキーに'22'、placeキーに'富山'を入力して、ブラウザ上にそれぞれを表示せよ。
  echo "<br>";
  $lists = array('name' => '櫻井', 'age' => '22', 'place' => '富山');
  echo $lists['name'];
  echo $lists['age'];
  echo $lists['place'];

  //練習問題6
  //以下の$a, $b, $cは三角形の辺の長さである。
  //この3辺で三角形は成立可能か($a + $b > $c)を求めよ。もし、三角形が成立可能ならばブラウザに「可能」、成立不可能ならば「不可能」と表示せよ。

   echo "<br>";
   $a = 5;
   $b = 9;
   $c = 13;
   if ($a + $b > $c){
      echo '正解';
   }else{
      echo '不正解';
   }


  //練習問題7
  //ある学校のこれまでの成績表では A ~ E までのアルファベットで成績をつけていました。今年度から成績を 5 ~ 1 の数字で成績をつけることになりました。
  //これまでの成績も以下の様に変換することになりました。これを、switch文を用いてこの問題を解きなさい。
  /*
  変換前 -> 変換後
    5   ->   A
    4   ->   B
    3   ->   C
    2   ->   D
    1   ->   E
  */
   echo "<br>";
   $d = 'B';

   switch ($d) {
      case 'A':
      echo '5';
      break;
       
      case 'B':
      echo '4';
      break;

      case 'C':
      echo '3';  
      break;

      case 'D':
      echo '2';
      break;

      default:
      echo '1';
       
      break;

   }

  //練習問題8
  //変数$i = 10; を用意し、10から1まで1つずつカウントダウンするプログラムを作成せよ。(1つずつ改行して表示せよ)
  //この問題にはwhileを用いること

  echo "<br>";
  $i = 10;
  while ($i>= 1) {
    echo $i . "<br>";
    $i--;
  }

  //練習問題9
  //正の整数1から9に、それぞれ5を掛けた数を半角スペース区切りでブラウザに表示せよ。
  //この問題にはforを用いること

  for($e = 1; $e <= 9; $e++){
      echo $e * 5 . ' ';
  }

  //練習問題10
  //以下の配列を表示せよ。(1つずつ改行して表示せよ)
  //この問題にはforeachを用いること

  echo "<br>";
  $food = array('carry', 'onigiri', 'candy', 'ham', 'meet', 'rice');
  foreach ($food as $key ) {
    echo $key . "<br>";
  }

  //練習問題11
  //以下の変数を用いて加減乗除のそれぞれの関数を作成せよ。
  $a = 10;
  $b = 5;
  echo "<br>";
  function add ($a,$b){
    $c = $a + $b;
    return $c;
  }
  function sub ($a,$b){
    $d = $a - $b;
    return $d;
  }
  function mult ($a,$b){
    $e = $a * $b;
    return $e;
  }
  function divison($a,$b){
    $f = $a / $b;
    return $f;
  }

  //課題1
  //西暦の計算
  //以下の配列に2つの西暦a, bがあります。その2つのaからbが何年間か出力しなさい。
  echo "<br>";
  $year = array(1994, 2017);
  echo $year[1] - $year[0];

  //課題2
  //かまくらづくり
  //櫻井がはしゃいでかまくらを作り始めました。どれだけの体積の雪が必要か計算しなさい。
  //そのかまくらは四角形であり、以下の配列に外側の1辺と内側の1辺の長さが入っている。(r1 > r2)
  //下の行のecho文のコメントを外すとimageが出てくるのでこちらも参照するとわかりやすい。
  echo "<br>";
  echo '<img src="./assets/img/img1.png">';
  echo "<br>";
  $size = array(6, 4);
  echo $size[0] * $size[0] - $size[1] * $size[1];

  //課題２修正
  echo $size[0] * $size[0] *$size[0] - $size[1] * $size[1] * $size[1];


  //課題3
  //行列の計算
  //まず、以下のecho文のコメントをはずしてください。
  //以下の配列内にa = 10, b = -20, c = 12, d = 6がそれぞれ代入されている。
  //この行列を表す配列を用いて、行列の計算を行いなさい。
  echo "<br>";
  echo '<img src="./assets/img/matrix1.png">';
  echo "<br>";
  $matrix = array(10, -20, 12, 6);
  echo $matrix[0] * $matrix[3] - $matrix[1] * $matrix[2];

  //課題4
  //自己紹介
  //練習問題5を参考にして、自己紹介をせよ。
  //例) 私は、安久昌和です。出身は石川県で、年齢は22歳、趣味はバスケットボールです。電子・情報工学科に所属しています。
  //必ず、連想配列を用いること
  echo "<br>";
  $myself = array(
    'name' => '私は高井万奈です。',
    'place'=> '長野市出身で',
    'major' => '知能デザイン工学科に所属しています。',
    'pet' => '実家ではネコを飼っています。',
    'like' => 'チョコとコーヒーが大好きです。'
  );

  echo $myself['name'];
  echo $myself['place'];
  echo $myself['major'];
  echo $myself['pet'];
  echo $myself['like'];

  //課題４修正
  echo "<br>" ."<br>";
  $me = array('name' => '高井万奈', 'place' => '長野市', 'major' => '知能デザイン工学科', 'pet' =>'ネコ', 'like' => 'チョコとコーヒー' );

  echo '私は' .$me['name'] . 'です。' . $me['place'] .'出身で、' . $me['major'] . 'に所属しています。' . "<br>";
  echo '実家では' . $me['pet'] . 'を飼っています。' . "<br>";
  echo $me['like'] . 'が好きです。' . "<br>" ;
  echo "<br>";

  //課題5
  //1~100までの数字を表示するプログラムを作成せよ。
  //※出力のレイアウトは下記のように表示すること(数字を10個表示したタイミングで改行する)
  //for, ifのみを用いること
  /*
  1 2 3 4 5 6 7 8 9 10
  11 12 13 14 15 16 17 18 19 20
  ...
  ...
  91 92 93 94 95 96 97 98 99 100
  */
  echo "<br>";
  for ($g = 1; $g <= 100; $g++){
    if($g <= 100){
      echo $g . " ";
    }
    if(($g % 10) == 0){
      echo "<br>";
    }
  }

  //課題6
  //時差の問題
  //以下の配列に都市の個数、各都市の時差、ある都市の現在時刻が入っている。
  //この配列を用いて、各都市の現在時刻を表示せよ。
  //ちなみに、今シンガポールで22:38なので、東京では0:38である。
  //for, ifのみ用いること
  $jisa = array(5, array('tokyo', 9), array('beijing', 8), array('singapore', 7), array('london', 0), array('newyork', -5), array('singapore', '22:38'));
  //print_r($jisa);

  echo "<br>";
  print_r($jisa);
  echo "<br>";

  echo $jisa[6][0] . " " . $jisa[6][1];

  //課題7
  //練習問題1~10と課題1~5を関数化せよ。

  //課題7.1
  //練習問題1の関数化

  echo "<br>";

  function hoge($first, $last){
    $hoge = $first . $last;
    return $hoge;
  }
  $i = hoge('Takai', 'Mana');
  echo $i;
 
  //課題7.2
  //練習問題2の関数化

  echo "<br>";
  $a = 8;
  $b = 3;
  $j = mult($a, $b);
  echo $j;
  
  echo "<br>";
  $a = 24;
  $b = 8;
  $k = divison($a,$b);
  echo $k;

  echo "<br>";
  $a = 6;
  $b = 10;
  $l = add($a,$b);
  echo $l;   

  echo "<br>";
  $a = 6;
  $b = 10;
  $m = sub($a,$b);
  echo $m;
  
 
  echo "<br>";
  function rest($a,$b){
    $hogehoge = $a % $b;
    return $hogehoge;
  }
  $hogehoge = rest('10','7');
  echo $hogehoge;
 
  //練習問題3の関数化
  //課題7.3

  //課題7.4
  //練習問題4の関数化

  //課題7.5
  //練習問題5の関数化

  //課題7.6
  //練習問題6の関数化

  //課題7.7
  //練習問題7の関数化

  //課題7.8
  //練習問題8の関数化

  //課題7.9
  //練習問題9の関数化

  //課題7.10
  //練習問題10の関数化

  //課題7.11
  //課題1の関数化

  //課題7.12
  //課題2の関数化

  //課題7.13
  //課題3の関数化

  //課題7.14
  //課題4の関数化

  //課題7.15
  //課題5の関数化


?>
