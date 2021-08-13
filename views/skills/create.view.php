<?php require 'views/partials/header.view.php' ?>
<div class="container">
    <h2>Create skill for: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
    <hr>
    <?php require 'views/skills/partials/form.view.php' ?>
</div>
<?php require 'views/partials/footer.view.php' ?>