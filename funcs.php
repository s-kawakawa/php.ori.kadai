<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function h($str)
{
   return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function db_conn()
{
    try {
        $db_name = 'gs_db'; $db_id   = 'root'; $db_pw = '';
        $db_host = 'localhost';
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}
