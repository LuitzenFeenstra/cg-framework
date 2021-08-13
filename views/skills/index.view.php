<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="skills">
        <h2>Skills of: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['skills'] as $skill) : ?>
                <div class="col-10"><?= $skill->skill ?></div>
                <div class="col-1">
                    <a class="btn" href="/skills/<?= $skill->id ?>/edit">edit</a>
                </div>
                <div class="col-1">
                    <a class="btn" href="/skills/<?= $skill->id ?>/destroy">delete</a>
                </div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>