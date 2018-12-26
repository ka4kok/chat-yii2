<?php

use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<form action="" name="message" class="form">
    <div class="title"><a href="#">ROOM</a></div>

    <div class="row" style="display: flex;">
        <div class="col"><input type="text" name="msg" class="msg"></div>
        <div class="col"><input value="ADD" type="submit"></div>
    </div>
    <div class="col-count"><p>nickname: </p><p class="count">0</p></div>
    <div class="result"></div>
</form>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>