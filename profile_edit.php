<?php
//funcs.phpに記載している共通関数を呼び出し
require_once('funcs.php');
//1.  DB接続します
try {
  //ID:'root', Password: xamppは 空白 '',SQLのポート番号の指定も必要
  $pdo = new PDO('mysql:dbname=user_db_class;
                  port=3307;
                  charset=utf8;
                  host=localhost','root','');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}
//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status === false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

} else {
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  //$stmt->fetch(PDO::FETCH_ASSOC)でデータベースの中身を全て取り出す
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= $result['date']. h($result['name']). h($result['url']).h($result['comment']);
    $view .= '</p>';
  }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_profile.css">
</head>

<body>
        <!-- ヘッダー情報 -->
        <header>
     <button id = "back_btn">
        <img src="pic/back.png" alt="" id = "btn_pic">
     </button>
     <div class="title_area">
            <div class="title">プロフィール設定画面</div>
        </div>
     </header>

     <main>
     <!-- プロフィール入力部 -->
     <form action="profile_insert.php" method="post" id = "profile_area">
        <input type="text" id = "name" name = "name" placeholder="好きなアイドルグループ">
        <input type="text" id = "url" name = "url" placeholder="あなたの推し曲のYoutube URL">
        <input type="text" id = "comment" name = "comment" placeholder="どんなところが良い？">
        <div id = send_btn_area>
            <input type="submit" value= "送信">
        </div>
    </form>


    <div>
    <div class="container jumbotron"><?= $view ?></div>
</div>

     </main>


    <!-- jquery指定 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jsファイル指定、importを使用するためにはscript指定時に「type="module"」を入れないと動かない -->
    <script type="module" src="js/registration.js"></script>
    
    

</body>
</html>