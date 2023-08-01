<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>あなたのカラダを知るために、、、</legend>
                <label>名前：<input type="text" name="name"></label><br>
                <label>身長：<input type="number" name="height"></label><br>
                <label>体重：<input type="number" name="body"></label><br>
                <label>Email:<input type="text" name="email"></label><br>
                <label>活動量:<input type="text" name="momentum"></label><br>
                <label><textArea name="content" rows="4" cols="40"></textArea></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->
<!-- 
$name = $_POST['name'];
$email = $_POST['height'];
$content = $_POST['body'];
$content = $_POST['email'];
$content = $_POST['momentum'];
$content = $_POST['content'];
 -->

</body>

</html>
