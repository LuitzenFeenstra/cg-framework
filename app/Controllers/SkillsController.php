<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Models\SkillModel;

class SkillsController extends Controller
{

    public function index()
    {
        $userId = Helper::getIdFromUrl('user');
        $skills = SkillModel::load()->allId($userId);
        $user = UserModel::load()->get($userId);

        return View::render('skills/index.view', [
            'skills'      => $skills,
            'user'        => $user,
        ]);
    }

    public function create()
    {
        $userId = Helper::getUserIdFromSession();
        $user = UserModel::load()->get($userId);

        return View::render('skills/create.view', [
            'method'    => 'POST',
            'action'    => '/skills/store',
            'user'      => $user,
        ]);
    }

    public function store()
    {
        $skill = $_POST;
        $userId = Helper::getUserIdFromSession();

        $skill['user_id'] = $userId;
        $skill['created_by'] = $userId;
        $skill['created'] = date('Y-m-d H:i:s');

        SkillModel::load()->store($skill);

        header("Location: /user/$userId/skills");
    }

    public function edit()
    {
        $id = Helper::getIdFromUrl('skills');
        $skill = SkillModel::load()->get($id);

        return View::render('skills/edit.view', [
            'method'    => 'POST',
            'action'    => '/skills/' . $id . '/update',
            'skill'     => $skill,
        ]);
    }

    public function update()
    {
        $id = Helper::getIdFromUrl('skills');
        $skill = $_POST;

        SkillModel::load()->update($skill, $id);

        $newSkill = SkillModel::load()->get($id);
        $userId = $newSkill->user_id;
        header("Location: /user/$userId/skills");
    }

    public function show()
    {
    }

    public function destroy()
    {
        $id = Helper::getIdFromUrl('skills');
        $skill = SkillModel::load()->get($id);
        $userId = $skill->user_id;

        SkillModel::load()->destroy($id);
        header("Location: /user/$userId/skills");
    }
}
