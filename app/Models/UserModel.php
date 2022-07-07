<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = ['fullname', 'username', 'password', 'email','role'];

  public function getUsers($id = null)
  {
    if(!$id) {
      return $this->findAll();
    } 
    return $this->where(['id' => $id]);
  }
}