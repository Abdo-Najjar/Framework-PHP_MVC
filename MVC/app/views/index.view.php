
    <?php require("partials/header.php") ?>

    <h1>Taskes </h1>
    <ul>
        <?php foreach($result as $task):?>

            <?php if($task->completed ==1): ?>
                <strike> 

                <li><?=$task->description?></li>

                </strike> 

                <?php  else:?>

                <li><?=$task->description?></li>

                <?php endif; ?>

    <?php endforeach; ?>
    </ul>
    <?php require("partials/footer.php") ?>
