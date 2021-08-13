<?php require 'views/partials/header.view.php' ?>

<div class="main container">

    <h2>Curriculum vitae: <?= $vars['user']->first_name ?> <?= $vars['user']->last_name ?></h2>

    <section class="persoonsgegevens">
        <h2>User:</h2>
        <hr>
        <div class="row">
            <div class="col-3">Voornaam:</div>
            <div class="col-9"><?= $vars['user']->first_name ?></div>
        </div>
        <div class="row">
            <div class="col-3">Achternaam:</div>
            <div class="col-9"><?= $vars['user']->last_name ?></div>
        </div>
        <div class="row">
            <div class="col-3">Geboortedatum:</div>
            <div class="col-9"><?= date("d-m-Y", strtotime($vars['user']->birthday)) ?></div>
        </div>
        <div class="row">
            <div class="col-3">Woonplaats:</div>
            <div class="col-9"><?= $vars['user']->city ?></div>
        </div>
        <div class="row">
            <div class="col-3">e-mail:</div>
            <div class="col-9"><?= $vars['user']->email ?></div>
        </div>
    </section>

    <section class="opleidingen">
        <h2><a id="tLink" href="/user/<?= $vars['user']->id ?>/educations">Educations:</a></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['educations'] as $education) : ?>
                <div class="col-3"><?= $education->start_year ?> / <?= $education->end_year ?></div>
                <div class="col-3"><?= $education->degree ?></div>
                <div class="col-6"><?= $education->school_name ?></div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="werk">
        <h2><a id="tLink" href="/user/<?= $vars['user']->id ?>/jobs">Jobs:</a></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['jobs'] as $job) : ?>
                <div class="col-3"><?= date("d-m-Y", strtotime($job->start_date)) ?> / <?= date("d-m-Y", strtotime($job->end_date)) ?></div>
                <div class="col-3"><?= $job->job_title ?></div>
                <div class="col-3"><?= $job->comp_name ?></div>
                <div class="col-3"><?= $job->comp_address ?></div>
            <?php endforeach ?>
        </div>
    </section>

    <section class="skills">
        <h2><a id="tLink" href="/user/<?= $vars['user']->id ?>/skills">Skills:</a></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['skills'] as $skill) : ?>
                <tr>
                    <div class="col-12"><?= $skill->skill ?></div>
                </tr>
            <?php endforeach ?>
        </div>
    </section>

    <section class="hobbies">
        <h2><a id="tLink" href="/user/<?= $vars['user']->id ?>/hobbies">Hobbies:</a></h2>
        <hr>
        <div class="row">
            <?php foreach ($vars['hobbies'] as $hobby) : ?>
                <div class="col-12"><?= $hobby->hobby ?></div>
            <?php endforeach ?>
        </div>
    </section>

</div>

<?php require 'views/partials/footer.view.php' ?>