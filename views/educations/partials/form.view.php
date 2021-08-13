<section class="opleidingen_form">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
        <div class=" row">
            <div class="col-6">
                <label for="start_year" class="form-label">What year did you start your education?</label>
                <input type="number" class="form-control" id="start_year" name="start_year" placeholder="1990" value="<?= isset($vars['education']) ? $vars['education']->start_year : '' ?>">
            </div>
            <div class="col-6">
                <label for="end_year" class="form-label">What year did you end your education?</label>
                <input type="number" class="form-control" id="end_year" name="end_year" placeholder="1994" value="<?= isset($vars['education']) ? $vars['education']->end_year : '' ?>">
            </div>
            <div class="col-12">
                <label for="degree" class="form-label">Degree:</label>
                <input type="text" class="form-control" id="degree" name="degree" placeholder="Bachelor in Floral Design" value="<?= isset($vars['education']) ? $vars['education']->degree : '' ?>">
            </div>
            <div class="col-12">
                <label for="institute" class="form-label">College:</label>
                <input type="text" class="form-control" id="institute" name="school_name" placeholder="Floral Design Colllege" value="<?= isset($vars['education']) ? $vars['education']->school_name : '' ?>">
            </div>
        </div>
        <hr>
        <input type="hidden" name="f_token" value="<?= createToken() ?>">
        <button class="btn" type="submit">Submit</button>
    </form>
</section>