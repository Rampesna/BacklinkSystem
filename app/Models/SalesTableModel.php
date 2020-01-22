<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class SalesTableModel extends Model
{
    use Notifiable;
    protected $table = "sales";
    protected $primaryKey = "id";
    protected $guarded = [];
}
