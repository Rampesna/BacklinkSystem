<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class UsersTableModel extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    protected $primaryKey = "id";
    protected $guarded = [];

}
