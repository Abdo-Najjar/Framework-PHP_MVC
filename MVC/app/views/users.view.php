
    <?php require("partials/header.php") ?>
<h1>users</h1>

        <?php if(empty($users)):?>
            <h1>No uses to view</h1>

            <?php else:?>
                <?php foreach($users as $user): ?>
                        <li><?=$user->name?></li>
                <?php endforeach; ?>
        <?php endif;?>
        
    
    <?php require("partials/footer.php") ?>
