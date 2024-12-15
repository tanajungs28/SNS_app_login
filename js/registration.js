// ユーザー登録ボタン押したときの動き
$("#reg_btn").on("click",function(){
    console.log("ユーザー登録ボタン押下")
    location.href = "./user_reg.php";
})

// ユーザー登録ボタン押したときの動き
$("#list_btn").on("click",function(){
    console.log("ユーザー一覧ボタン押下")
    location.href = "./user_list.php";
})

// ユーザー登録ボタン押したときの動き
$("#timeline_btn").on("click",function(){
    console.log("タイムラインボタン押下")
    location.href = "./timeline.php";
})

// ユーザー登録ボタン押したときの動き
$("#back_btn").on("click",function(){
    console.log("戻るボタン押下")
    location.href = "./index.php";
})

