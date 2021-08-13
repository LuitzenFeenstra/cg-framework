<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="opleidingen">
        <h2>Educations of: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-3"><?= $education->start_year ?> / <?= $education->end_year ?></div>
                <div class="col-3"><?= $education->degree ?></div>
                <div class="col-4"><?= $education->school_name ?></div>
                <div class="col-1">
                    <a class="btn" href="/educations/<?= $education->id ?>/edit">edit</a>
                </div>
                <div class="col-1">
                    <a class="btn" href="/educations/<?= $education->id ?>/destroy">delete</a>
                </div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>