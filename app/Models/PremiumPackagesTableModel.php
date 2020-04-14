<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class PremiumPackagesTableModel extends Model
{
    use Notifiable;
    protected $table = "premium_packages";
    protected $primaryKey = "id";
    protected $guarded = [];
}
