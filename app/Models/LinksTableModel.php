<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LinksTableModel extends Model
{
    use Notifiable;
    protected $table = "links";
    protected $primaryKey = "id";
    protected $guarded = [];
}
