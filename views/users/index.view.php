<?php require 'views/partials/header.view.php' ?>
<section class="main-section container">
    <div class="row">
        <?php foreach ($vars['users'] as $user) : ?>
            <div class="col-md-3"><?= $user->first_name ?></div>
            <div class="col-md-6"><?= $user->last_name ?></div>
            <div class="col-md-1">
                <a class="btn" href="/user/<?= $user->id ?>">view</a>
            </div>
            <div class="col-md-1">
                <a class="btn" href="/user/<?= $user->id ?>/edit">edit</a>
            </div>
            <div class="col-md-1">
                <a class="btn" href="/user/<?= $user->id ?>/destroy">delete</a>
            </div>
        <?php endforeach ?>
        <div class="col-12">
            <a class="btn" href="/user/create">Create new user</a>
        </div>
    </div>
</section>
<?php require 'views/partials/footer.view.php' ?>