<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PremiumSalesTableModel extends Model
{
    use Notifiable;
    protected $table = "premium_sales";
    protected $primaryKey = "id";
    protected $guarded = [];
}
