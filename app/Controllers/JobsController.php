<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Models\JobModel;

class JobsController extends Controller
{

    public function index()
    {
        $userId = Helper::getIdFromUrl('user');
        $jobs = JobModel::load()->allId($userId);
        $user = UserModel::load()->get($userId);

        return View::render('jobs/index.view', [
            'jobs'        => $jobs,
            'user'        => $user,
        ]);
    }

    public function create()
    {
        $userId = Helper::getUserIdFromSession();
        $user = UserModel::load()->get($userId);

        return View::render('jobs/create.view', [
            'method'    => 'POST',
            'action'    => '/jobs/store',
            'user'      => $user,
        ]);
    }

    public function store()
    {
        $job = $_POST;
        $userId = Helper::getUserIdFromSession();

        $job['start_date'] = date("Y-m-d", strtotime($_POST['start_date']));
        $job['end_date'] = date("Y-m-d", strtotime($_POST['end_date']));
        $job['user_id'] = $userId;
        $job['created_by'] = $userId;
        $job['created'] = date('Y-m-d H:i:s');

        JobModel::load()->store($job);

        header("Location: /user/$userId/jobs");
    }

    public function edit()
    {
        $id = Helper::getIdFromUrl('jobs');
        $job = JobModel::load()->get($id);

        return View::render('jobs/edit.view', [
            'method'    => 'POST',
            'action'    => '/jobs/' . $id . '/update',
            'job'     => $job,
        ]);
    }

    public function update()
    {
        $id = Helper::getIdFromUrl('jobs');
        $job = $_POST;

        $job['start_date'] = date("Y-m-d", strtotime($_POST['start_date']));
        $job['end_date'] = date("Y-m-d", strtotime($_POST['end_date']));

        JobModel::load()->update($job, $id);

        $newJob = JobModel::load()->get($id);
        $userId = $newJob->user_id;
        header("Location: /user/$userId/jobs");
    }

    public function show()
    {
    }

    public function destroy()
    {
        $id = Helper::getIdFromUrl('jobs');
        $job = JobModel::load()->get($id);
        $userId = $job->user_id;

        JobModel::load()->destroy($id);
        header("Location: /user/$userId/jobs");
    }
}
