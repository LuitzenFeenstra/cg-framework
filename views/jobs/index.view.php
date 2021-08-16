<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <section class="werk">
        <h2>Jobs of: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-2"><?= date("d-m-Y", strtotime($job->start_date)) ?> / <?= date("d-m-Y", strtotime($job->end_date)) ?></div>
                <div class="col-2"><?= $job->job_title ?></div>
                <div class="col-3"><?= $job->comp_name ?></div>
                <div class="col-3"><?= $job->comp_address ?></div>
                <div class="col-1">
                    <a class="btn" href="/jobs/<?= $job->id ?>/edit">edit</a>
                </div>
                <div class="col-1">
                    <a class="btn" href="/jobs/<?= $job->id ?>/destroy">delete</a>
                </div>
            <?php endforeach ?>
            <div class="col-12">
                <a class="btn" href="/jobs/create">Add Job</a>
            </div>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>