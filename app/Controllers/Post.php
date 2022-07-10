<?php

namespace App\Controllers;
use App\Models\PostModel;

class Post extends BaseController
{
  public function index()
  {
    $model = model(PostModel::class);
    $data = [
      'posts' => $model->getPosts(),
      'title' => 'Posts in database'
    ];

    return view('templates/header', $data)
    .view('templates/navbar')
    .view('posts/index')
    .view('templates/footer');
  }

  public function view_post($id = null)
  {
    $db = \Config\Database::connect();
    $query = $db->query('SELECT * FROM posts WHERE id='. $id);
    $post = $query->getRowArray();

    $data = [
      'title' => 'Singel Post View',
      'post' => $post,
    ];

    return view('templates/header', $data)
    .view('templates/navbar')
    .view('posts/view_post')
    .view('templates/footer');
  }

  public function create_post()
  {
    {
      return view('templates/header', ['title' => 'Create new post'])
      .view('templates/navbar')
      .view('posts/create_post')
      .view('templates/footer');  
    }
  }

  public function insert_post() 
  {
    $model = new PostModel();
    // print_r($_POST);
    $model->insert($_POST);
    
    return view('templates/header', ['title' => 'Post Created'])
    .view('templates/navbar')
    .view('posts/success')
    .view('templates/footer');
  }
}