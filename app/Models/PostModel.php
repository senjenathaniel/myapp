<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{
  protected $table = 'posts';
  protected $primaryKey = 'id';
  protected $allowedFields = ['body','author', 'img_url', 'is_published'];

  public function getPosts($id = false)
  {
    if($id === false) {
      return $this->findAll();
    }
    $data = $this->where(['id' => $id]);
    return $data;
  }
}