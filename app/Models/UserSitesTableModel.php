<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserSitesTableModel extends Model
{
    use Notifiable;
    protected $table = "user_sites";
    protected $primaryKey = "id";
    protected $guarded = [];
}
