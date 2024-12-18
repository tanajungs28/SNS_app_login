


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNS風味にしたいアプリ</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style_index.css">
    <link rel="stylesheet" href="css/style_timeline.css">
</head>


<body>
    <!-- ヘッダーとハンバーガーメニュー -->
    <header>
        <div class="title_area">
            <div class="title">SNS風味にしたいアプリ</div>
        </div>
        <input type="checkbox" class="menu-btn" id="menu-btn">
        <label for="menu-btn" class="menu-icon"><span class="navicon"></span></label>
            <ul class="menu">
                <li class="top"><a href="./user_reg.php">ユーザー登録</a></li>
                <li><a href="./user_list.php">ユーザー一覧</a></li>
                <li><a href="./profile_edit.php">推し曲登録</a></li>
                <li><a href="">未実装</a></li>
            </ul>
    </header>
    
    <main>

    <!-- タイムライン -->
     <!-- ツイート入力部 -->
     <form action="index.php" method="post" id = "tweet_area">
        <input type="text" id = "tweet" name = "tweet" placeholder="いまどうしてる？">
        <div id = send_btn_area>
            <input type="submit" value= "送信">
        </div>
    </form>

    <?php
        if (isset($_POST['tweet'])) {
            $tweet = $_POST['tweet'];
            $data = $tweet . "\n";
            file_put_contents('data/tweet.txt', $data , FILE_APPEND);
        }
        
        $tweets = [];
        // テキストデータの中身がある場合、file関数を使用して配列に格納
        if (file_exists('data/tweet.txt')) {
            $tweets = file('data/tweet.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // 各行を配列に格納
        }
        //var_dump($tweets);
    ?>

    <!-- タイムラインを表示 -->
    <div id="timeline">
    <!-- $tweetが空でないときに実行 -->
    <?php if (!empty($tweets)): ?>
        <!-- 配列の要素を1個ずつ取り出し、要素（$tweet）に代入して処理を繰り返す -->
        <?php foreach (array_reverse($tweets) as $tweet): // 新しい順に表示 ?>
            <div class="tweet-card">
                <p class="tweet-content"><?php echo $tweet; ?></p>
                <span class="tweet-time"><?php echo date('Y-m-d H:i:s'); ?></span>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>まだツイートがありません。</p>
    <?php endif; ?>
</div>


    </main>


    
    <!-- jquery指定 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jsファイル指定、importを使用するためにはscript指定時に「type="module"」を入れないと動かない -->
    <script type="module" src="js/registration.js"></script>


</body>
</html>