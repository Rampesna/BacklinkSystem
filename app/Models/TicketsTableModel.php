<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class TicketsTableModel extends Model
{
    use Notifiable;
    protected $table = "tickets";
    protected $primaryKey = "id";
    protected $guarded = [];
}
