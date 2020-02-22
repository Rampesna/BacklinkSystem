<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LandingSettingsTableModel extends Model
{
    use Notifiable;
    protected $table = "landing_settings";
    protected $primaryKey = "id";
    protected $guarded = [];
    public $timestamps = false;
}
