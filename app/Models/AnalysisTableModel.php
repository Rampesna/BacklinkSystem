<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AnalysisTableModel extends Model
{
    use Notifiable;
    protected $table = "analysis";
    protected $primaryKey = "id";
    protected $guarded = [];
}
