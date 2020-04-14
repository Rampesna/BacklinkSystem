<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BlogCommentsTableModel extends Model
{
    use Notifiable;
    protected $table = "blog_comments";
    protected $primaryKey = "id";
    protected $guarded = [];
}
