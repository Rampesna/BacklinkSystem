<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BlogTableModel extends Model
{
    use Notifiable;
    protected $table = "blog";
    protected $primaryKey = "id";
    protected $guarded = [];
}
