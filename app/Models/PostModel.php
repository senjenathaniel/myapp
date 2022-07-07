<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
  protected $table = 'posts';
  protected $primaryKey = 'id';
  // protected $allowedFields = ['post_title','post_slug', 'post_body', 'post_author', 'post_img_url'];

  public function getPosts($id = false)
  {
    if($id === false) {
      return $this->findAll();
    }
    $data = $this->where(['id' => $id]);
    return $data;
  }
}