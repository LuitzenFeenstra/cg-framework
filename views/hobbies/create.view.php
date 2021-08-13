<?php require 'views/partials/header.view.php' ?>
<div class="container">
    <h2>Create hobby for: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
    <hr>
    <?php require 'views/hobbies/partials/form.view.php' ?>
</div>
<?php require 'views/partials/footer.view.php' ?>