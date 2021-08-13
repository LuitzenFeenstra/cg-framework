<section class="hobbies_form">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
        <div class="row">
            <div class="col-12">
                <label for="hobby" class="form-label">Hobby:</label>
                <input type="text" class="form-control" id="hobby" name="hobby" placeholder="trein surfen" value="<?= isset($vars['hobby']) ? $vars['hobby']->hobby : '' ?>">
            </div>
        </div>
        <hr>
        <input type="hidden" name="f_token" value="<?= createToken() ?>">
        <button class="btn" type="submit">Submit</button>
    </form>
</section>