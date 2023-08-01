<?php

$name = $_POST['name'];
$height = $_POST['height'];
$body = $_POST['body'];
$email = $_POST['email'];
$momentum = $_POST['momentum'];
$content = $_POST['content'];

//2. DB接続します
// require_once('funcs.php');
// $pdo = db_conn();
require_once('funcs.php');
$pdo = db_conn();

// try {
//     $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost', 'root', '');
// } catch (PDOException $e) {
//     exit('DBConnectError:'.$e->getMessage());
// }

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO
                        gs_an_table2(
                            name, height, body, email, momentum, content,indate
                        ) VALUES (
                            :name, :height, :body, :email, :momentum, :content, sysdate
                            ());");

//  2. バインド変数を用意
// Integer 数値の場合 PDO::PARAM_INT
// String文字列の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':height', $height, PDO::PARAM_INT);
$stmt->bindValue(':body',$body, PDO::PARAM_INT);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':momentum', $momentum, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);
$status = $stmt->execute();

//４．データ登録処理後
if($status === false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit('ErrorMessage:'.$error[2]);
}else{
  //５．index.phpへリダイレクト
  header('Location: index.php');
}