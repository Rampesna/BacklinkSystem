<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EnemyAnalysisTableModel extends Model
{
    use Notifiable;
    protected $table = "enemy_analysis";
    protected $primaryKey = "id";
    protected $guarded = [];
}
