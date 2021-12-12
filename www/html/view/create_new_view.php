<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'templates/head.php'; ?>
</head>
<body>
    <a class="btn active" href="index.php" role="button">メモ一覧</a>

    <form method="post" action="create_new.php">
        <div class="form-group">
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="contents">メモ:</label>
            <textarea name="contents" id="contents" class="form-control"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">登録</button>
        </div>

    </form>


</body>
</html>