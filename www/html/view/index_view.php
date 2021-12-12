<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'templates/head.php'; ?>
</head>
<body>
    <a class="btn active" href="create_new.php" role="button">新規作成</a>
    <table class="table table-bordered">
        <tr>
            <th>タイトル</th>
            <th>内容</th>
            <th>編集</th>
            <th>削除</th>
        </tr>
<?php foreach($memo_data as $memo){ ?>
        <tr> 
            <form method="post" action="update.php">
            <td>
                <input class="form-control" type="text" name="title" value="<?php print(h($memo['title'])); ?>">
                <input type="hidden" name="title" value="<?php print(h($memo['title'])); ?>">
            </td>
            <td>
                <textarea class="form-control" name="contents"><?php print(h($memo['contents'])); ?></textarea>
                <input type="hidden" name="contents" value="<?php print(h($memo['contents'])); ?>">
            </td>
                <td><input type="submit" value="更新" class="btn btn-primary"></td>
                <input type="hidden" name="id" value="<?php print(h($memo['id'])); ?>">
            </form>
            
            <form method="post" action="delete.php">
                <td><input type="submit" value="削除" class="btn btn-danger delete"></td>
                <input type="hidden" name="id" value="<?php print(h($memo['id'])); ?>">
            </form>
        </tr>
<?php } ?>
    </table>
    <script>
        $('.delete').on('click', () => confirm('ほんまに削除してもいいん？'))
    </script>
</body>
</html>