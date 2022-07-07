<?php

namespace App\Controllers;
use App\Models\UserModel;

class User extends BaseController
{
  public function index()
  {
    $model = model(UserModel::class);
    $data = [
      'users' => $model->getUsers(),
      'title' => 'Users in database'
    ];
    return view('templates/header', $data)
    .view('templates/navbar')
    .view('users/index')
    .view('templates/footer');
  }

  public function view_user($id = null)
  {
    $db = \Config\Database::connect();
    $query = $db->query('SELECT * FROM users WHERE id='. $id);
    $user = $query->getRowArray();

    $data = [
      'title' =>  $user['fullname'],
      'user'=> $user,
    ];

    return view('templates/header', $data)
    .view('templates/navbar')
    .view('users/view_user')
    .view('templates/footer');
  }

  public function create_user()
  {
    {
      return view('templates/header', ['title' => 'Create new user'])
      .view('templates/navbar')
      .view('users/create_user')
      .view('templates/footer');  
    }
  }

  public function insert_record() 
  {
    $model = new UserModel();
    $data = $_POST;
    $model->insert($data);
    
    return view('templates/header', ['title' => 'User '. $data['fullname']  .' Created'])
    .view('templates/navbar')
    .view('users/success')
    .view('templates/footer');
  }
}