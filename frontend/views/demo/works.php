<?php
use yii\helpers\Url;
?>
<div>
    <?php foreach ($result as $res):?>
    <span>题目： <?= $res['title']?></span>
        <span>作者： <?= $res['author']?></span>
        <span>发布日期： <?= $res['publicDate']?></span>
    <br>
    <?php endforeach;?>

</div>


