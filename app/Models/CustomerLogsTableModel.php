<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerLogsTableModel extends Model
{
    protected $table = "customer_logs";
    protected $primaryKey = "id";
    protected $guarded = [];
}
