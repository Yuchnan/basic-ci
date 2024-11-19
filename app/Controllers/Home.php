<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('input_user');
    }

    public function submit()
    {
        $model = new UserModel;

        $data = [
            'username'  => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'birth' => $this->request->getPost('birth'),
        ];

        $model->insert($data);

        return redirect()->to('sukses');
    }

    public function sukses()
    {
        echo "Data berhasil disimpan!";
        sleep(3); // Tunggu 3 detik
        return redirect()->to('/list');
    }

    public function userList()
    {
        $model = new \App\Models\UserModel();
        $data['users_2'] = $model->findAll();

        return view('user_list', $data);
    }
}
