<section class="skill_form">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
        <div class="row">
            <div class="col-12">
                <label for="skill" class="form-label">Skill:</label>
                <input type="text" class="form-control" id="skill" name="skill" placeholder="dubbele salto achterwaarts" value="<?= isset($vars['skill']) ? $vars['skill']->skill : '' ?>">
            </div>
        </div>
        <hr>
        <input type="hidden" name="f_token" value="<?= createToken() ?>">
        <button class="btn" type="submit">Submit</button>
    </form>
</section>