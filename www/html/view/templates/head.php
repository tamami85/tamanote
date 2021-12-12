    <meta charset="UTF-8">
    
    <title>tama memo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <h1>tama memo</h1>

<?php foreach(get_errors() as $error){ ?>
    <p class="alert alert-danger"><span><?php print $error; ?></span></p>
<?php } ?>
<?php foreach(get_messages() as $message){ ?>
    <p class="alert alert-success"><span><?php print $message; ?></span></p>
<?php } ?>