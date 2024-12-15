<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

//htmlspecialchars($stg, ENT_QUOTES)を簡単に書くために関数作成
function h($stg){
    return htmlspecialchars($stg, ENT_QUOTES);
  }