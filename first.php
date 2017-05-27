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
  

?>
