<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Models\EducationModel;

class EducationsController extends Controller
{

    public function index()
    {
        $userId = Helper::getIdFromUrl('user');
        $educations = EducationModel::load()->allId($userId);
        $user = UserModel::load()->get($userId);

        return View::render('educations/index.view', [
            'educations'  => $educations,
            'user'        => $user,
        ]);
    }

    public function create()
    {
        $userId = Helper::getUserIdFromSession();
        $user = UserModel::load()->get($userId);

        return View::render('educations/create.view', [
            'method'    => 'POST',
            'action'    => '/educations/store',
            'user'      => $user,
        ]);
    }

    public function store()
    {
        $education = $_POST;
        $userId = Helper::getUserIdFromSession();

        $education['user_id'] = $userId;
        $education['created_by'] = $userId;
        $education['created'] = date('Y-m-d H:i:s');

        EducationModel::load()->store($education);

        header("Location: /user/$userId/educations");
    }

    public function edit()
    {
        $id = Helper::getIdFromUrl('educations');
        $education = EducationModel::load()->get($id);

        return View::render('educations/edit.view', [
            'method'        => 'POST',
            'action'        => '/educations/' . $id . '/update',
            'education'     => $education,
        ]);
    }

    public function update()
    {
        $id = Helper::getIdFromUrl('educations');
        $education = $_POST;

        EducationModel::load()->update($education, $id);

        $newEducation = EducationModel::load()->get($id);
        $userId = $newEducation->user_id;
        header("Location: /user/$userId/educations");
    }

    public function show()
    {
    }

    public function destroy()
    {
        $id = Helper::getIdFromUrl('educations');
        $education = EducationModel::load()->get($id);
        $userId = $education->user_id;

        EducationModel::load()->destroy($id);
        header("Location: /user/$userId/educations");
    }
}
