<?php
date_default_timezone_set('Asia/Tokyo');

// 受け取り処理
// $time = date("Y-m-d H:i:s");
$visit =$_POST['visit'];
$name =$_POST['name'];
$station =$_POST['station'];
$adress =$_POST['adress'];
$tel=$_POST['tel'];
$coffee =$_POST['coffee'];
$price =$_POST['price'];
$introduction =$_POST['introduction'];
$category =$_POST['category'];
$rate =$_POST['rate'];



function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

// ファイルを開く
$file = fopen('./data/data.txt', 'a');

// ファイルに書き込み
// fwrite($file, h($time)."/"); //\nで改行。これはシングルクォーテーションでは動かない
fwrite($file, h($visit)."/");
fwrite($file, h($name)."/");
fwrite($file, h($station)."/");
fwrite($file, h($adress)."/");
fwrite($file, h($tel)."/");
fwrite($file, h($coffee)."/");
fwrite($file, h($price)."/");
fwrite($file, h($introduction)."/");
fwrite($file, h($category)."\n");
// fwrite($file, h($rate)."\n");


// $str = $time .' '. $name .' '. $mail .' '. $coffee .' '. $color .' '. $password;

//文字作成
// fwrite($file, $str . "\n");
fclose($file);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登録完了</title>
    <style>
    *{
        text-align: center;
        background: #DDBC95;
    }
    h3 {
        color:#B38867;
        padding-top: 20px;
    }

    li {
        list-style: none;
        margin-bottom: 10px;
    }

   a {
    color: #626D71;
    text-decoration: none;
   }

 /*=== 画像の表示エリア ================================= */
.slide {
  position   : relative;
  overflow   : hidden;
                    /* 画像のサイズに合わせて変更ください */
  width      : 400px;
  height     : 300px;
  margin     : auto;      /* サンプルは中央寄せの背景：白 */
  background : #fff;
}
 
 /*=== 画像の設定 ======================================= */
.slide img {
  display    : block;
  position   : absolute;
                      /* 画像のサイズを表示エリアに合せる */
  width      : inherit;
  height     : inherit;
  opacity    : 0;
  animation  : slideAnime 15s ease infinite;
}
 
 /*=== スライドのアニメーションを段差で開始する ========= */
.slide img:nth-of-type(1) { animation-delay: 0s }
.slide img:nth-of-type(2) { animation-delay: 3s }
.slide img:nth-of-type(3) { animation-delay: 6s }
.slide img:nth-of-type(4) { animation-delay: 9s }
.slide img:nth-of-type(5) { animation-delay: 12s }
 
 /*=== スライドのアニメーション ========================= */
@keyframes slideAnime{
   0% { opacity: 0; transform: scale(.1, .1)}
   2% { opacity: 1; transform: scale(1, 1)  }
  18% { opacity: 1; transform: scale(1, 1)  }
  20% { opacity: 0; transform: scale(2, 2)  }
 100% { opacity: 0; transform: scale(2, 2)  }
}

    </style>
</head>
<body>
<h3>COFFEE MAKES YOU HAPPY! </h3>
<h1>ご登録ありがとうございました。</h1>
<div class="slide" id="makeImg">
  <img src="https://images.unsplash.com/photo-1518832553480-cd0e625ed3e6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60"   alt="coffee1">
  <img src="https://images.unsplash.com/photo-1504066116688-57c2efd91274?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"    alt="coffee2">
  <img src="https://images.unsplash.com/photo-1521017432531-fbd92d768814?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"    alt="coffee3">
  <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80"    alt="coffee4">
  <img src="https://images.unsplash.com/photo-1447753072467-2f56032d1d48?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1334&q=80"  alt="coffee5">
</div>
    <ul>
        <li><a href="post.php">お店登録に戻る</a></li>
        <li><a href="read.php">登録内容を見る</a></li>
    </ul>
    <!-- <h2>./data/data.txt を確認しましょう！</h2> -->
</body>
</html>
