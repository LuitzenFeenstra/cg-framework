<section class="werk_form">
    <form method="<?= $vars['method'] ?>" action="<?= $vars['action'] ?>">
        <div class="row">
            <div class="col-6">
                <label for="job_start_year" class="form-label">Job start date:</label>
                <input type="date" class="form-control" id="job_start_year" name="start_date" value="<?= isset($vars['job']) ? $vars['job']->start_date : '' ?>">
            </div>
            <div class="col-6">
                <label for="job_end_year" class="form-label">Job end date:</label>
                <input type="date" class="form-control" id="job_end_year" name="end_date" value="<?= isset($vars['job']) ? $vars['job']->end_date : '' ?>">
            </div>
            <div class="col-12">
                <label for="job_title" class="form-label">Job title:</label>
                <input type="text" class="form-control" id="job_title" name="job_title" placeholder="chef lege dozen" value="<?= isset($vars['job']) ? $vars['job']->job_title : '' ?>">
            </div>
            <div class="col-12">
                <label for="comp_name" class="form-label">Company name:</label>
                <input type="text" class="form-control" id="comp_name" name="comp_name" placeholder="lege dozen inc." value="<?= isset($vars['job']) ? $vars['job']->comp_name : '' ?>">
            </div>
            <div class="col-12">
                <label for="comp_adr" class="form-label">Company adress:</label>
                <input type="text" class="form-control" id="comp_adr" name="comp_address" placeholder="achter je" value="<?= isset($vars['job']) ? $vars['job']->comp_address : '' ?>">
            </div>
        </div>
        <hr>
        <input type="hidden" name="f_token" value="<?= createToken() ?>">
        <button class="btn" type="submit">Submit</button>
    </form>
</section>