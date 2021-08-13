<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="hobbies">
        <h2>Hobbies of: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['hobbies'] as $hobby) : ?>
                <div class="col-10"><?= $hobby->hobby ?></div>
                <div class="col-1">
                    <a class="btn" href="/hobbies/<?= $hobby->id ?>/edit">edit</a>
                </div>
                <div class="col-1">
                    <a class="btn" href="/hobbies/<?= $hobby->id ?>/destroy">delete</a>
                </div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>