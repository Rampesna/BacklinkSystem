<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PremiumSitesTableModel extends Model
{
    use Notifiable;
    protected $table = "premium_sites";
    protected $primaryKey = "id";
    protected $guarded = [];
}
