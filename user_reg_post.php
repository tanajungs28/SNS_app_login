<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $data = $uname . '/' . $email . '/' . $gender ."\n";
        file_put_contents('data/data.txt', $data , FILE_APPEND);    
?>
   <!-- お名前：<?= $uname ?> -->
   <!-- EMAIL：<?= $email ?> -->

   
    <h1>登録完了</h1>

   <!-- 戻るボタンの実装 -->
     <div>
        <button id = "back_btn">戻る</button>
    </div>




    <!-- jquery指定 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- jsファイル指定、importを使用するためにはscript指定時に「type="module"」を入れないと動かない -->
    <script type="module" src="js/registration.js"></script>

</body>
</html>