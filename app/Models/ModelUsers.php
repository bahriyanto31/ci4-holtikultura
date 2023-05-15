<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsers extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['level', 'kon_id', 'name', 'username', 'password', 'ip_address', 'token', 'avatar', 'last_login'];

    public function cek_auth($user, $pass)
    {
        $pass = md5($pass);
        return $this->where([
            'username' => $user,
            'password' => $pass
        ])->first();
    }
    public function log_user($id)
    {
        return $this->update($id, [
            'ip_address' => request()->getIPAddress(),
            'token'      => csrf_hash(),
            'last_login' => date('Y-m-d H:i:s'),
        ]);
    }
}
