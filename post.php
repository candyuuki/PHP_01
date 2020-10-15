<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>オススメのカフェを新規登録</title>
    <style>
        *{
        text-align: center;
        }
        body {
            background:#EBB582;
        }
        h1 {
        color:#785A46
        }
        .continer{
            /* background-color: #2FA6E9; */
        }
        .resister {
        padding: 30px 50px 30px 50px;
        background-color: white;
        

        /* background-color: #2FA6E9; */
        }
        #send:hover {
            background: #B38867
        }
    </style>
</head>
<body>

    
    <!-- <form action="post_confirm.php" method="post"> -->
    <div class="continer">
    <h1>オススメのカフェを新規登録</h1>

    <form action="write.php" method="post" class="resister">
        訪れた日<br>
        <input type="date" name="visit"><br>
        お店の名前<br>
        <input type="text" name="name"><br>
        最寄駅<br>
        <input type="text" name="station"><br>
        住所<br>
        <input type="text" name="adress"><br>
        電話番号<br>
        <input type="text" name="tel"><br>
        飲んだもの<br>
        <input type="text" name="coffee"><br>
        値段<br>
        <input type="text" name="price"><br>
        感想<br>
        <textarea name="introduction" id="introduction" cols="30" rows="10"></textarea><br>
        カフェカテゴリー<br>
        <select name="category"><br>
        <option value="喫茶店">喫茶店</option>
        <option value="空間が魅力的なカフェ">空間が魅力的なカフェ</option>
        <option value="ブックカフェ">ブックカフェ</option>
        <option value="アートカフェ">アートカフェ</option>
        <option value="食事が充実しているカフェ">食事が充実しているカフェ</option>
        <option value="スウィーツが充実しているカフェ">スウィーツが充実しているカフェ</option>
        <option value="コーヒー専門店">コーヒー専門店</option>
        <option value="紅茶専門店">紅茶専門店</option>
        <option value="コーヒースタンド">コーヒースタンド</option>
        <option value="それ以外のカフェ">それ以外のカフェ</option>
        </select><br>
        <!-- 評価<br>
        <div class="rateoya">
     <div class="rate"></div>
    </div> -->
        <br>
        <input type="submit" id="send" value="登録する">
    </form>
    </div>
</body>

</html>
