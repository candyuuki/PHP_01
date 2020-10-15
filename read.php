<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>カフェの記録</title>
  <style>
  body {
    background-image:url("https://images.unsplash.com/photo-1488153074946-0d3b1bcd029c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60");
   
  }
  h1 {
    color: #C9A66B;
  text-align: center;
  /* background: #B38867 */
  }
  .container {
margin-left:20px;
margin-right:none;
background: white;
  }
  li {
        list-style: none;
       
    }
  th {
    background:#ddbc95
  }
    a {
      color: #626D71;
      text-decoration: none;
    }

  </style>
</head>

<body>
<h1>カフェの記録</h1>
<div class="container">
<table border="1">
  <tr>
    <th>訪れた日にち</th>
    <th>お店の名前</th>
    <th>最寄り駅</th>
    <th>住所</th>
    <th>電話番号</th>
    <th>飲んだドリンク</th>
    <th>値段</th>
    <th>紹介文</th>
    <th>カフェのカテゴリー</th>
    <!-- <th>評価</th> -->

  </tr>

  <?php
  // ファイルを開く
  $openFile = fopen('./data/data.txt','r');
  // ファイル内容を1行ずつ読み込んで出力
  while ($str = fgets($openFile)) {
  // $text = fgets($file); //nl2br()は改行をbrに変換する
    $array = explode("/" , $str);
    echo '<tr>';
    echo '<td>'.$array[0].'</td>';
    echo '<td>'.$array[1].'</td>';
    echo '<td>'.$array[2].'</td>';
    echo '<td>'.$array[3].'</td>';
    echo '<td>'.$array[4].'</td>';
    echo '<td>'.$array[5].'</td>';
    echo '<td>'.$array[6].'</td>';
    echo '<td>'.$array[7].'</td>';
    echo '<td>'.$array[8].'</td>';
    // echo '<td>'.$array[9].'</td>';

    echo '</tr>';

    }
  // echo nl2br($str);

  // ファイルを閉じる
  fclose($openFile);

  ?>
  </table>
  </div>
<ul>
  <li><a href="post.php">登録に戻る</a></li>
  </ul>
  
</body>
</html>
