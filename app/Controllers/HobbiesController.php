<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Models\UserModel;
use App\Libraries\View;
use App\Models\HobbyModel;

class HobbiesController extends Controller
{

    public function index()
    {
        $userId = Helper::getIdFromUrl('user');
        $hobbies = HobbyModel::load()->allId($userId);
        $user = UserModel::load()->get($userId);

        return View::render('hobbies/index.view', [
            'hobbies'      => $hobbies,
            'user'         => $user,
        ]);
    }

    public function create()
    {
        $userId = Helper::getUserIdFromSession();
        $user = UserModel::load()->get($userId);

        return View::render('hobbies/create.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/store',
            'user'      => $user,
        ]);
    }

    public function store()
    {
        $hobby = $_POST;
        $userId = Helper::getUserIdFromSession();

        $hobby['user_id'] = $userId;
        $hobby['created_by'] = $userId;
        $hobby['created'] = date('Y-m-d H:i:s');

        HobbyModel::load()->store($hobby);

        header("Location: /user/$userId/hobbies");
    }

    public function edit()
    {
        $id = Helper::getIdFromUrl('hobbies');
        $hobby = HobbyModel::load()->get($id);

        return View::render('hobbies/edit.view', [
            'method'    => 'POST',
            'action'    => '/hobbies/' . $id . '/update',
            'hobby'     => $hobby,
        ]);
    }

    public function update()
    {
        $id = Helper::getIdFromUrl('hobbies');
        $hobby = $_POST;

        HobbyModel::load()->update($hobby, $id);

        $newHobby = HobbyModel::load()->get($id);
        $userId = $newHobby->user_id;
        header("Location: /user/$userId/hobbies");
    }

    public function show()
    {
    }

    public function destroy()
    {
        $id = Helper::getIdFromUrl('hobbies');
        $hobby = HobbyModel::load()->get($id);
        $userId = $hobby->user_id;

        HobbyModel::load()->destroy($id);
        header("Location: /user/$userId/hobbies");
    }
}
