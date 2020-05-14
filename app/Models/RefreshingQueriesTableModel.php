<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class RefreshingQueriesTableModel extends Model
{
    use Notifiable;
    protected $table = "refreshing_queries";
    protected $primaryKey = "id";
    protected $guarded = [];
}
