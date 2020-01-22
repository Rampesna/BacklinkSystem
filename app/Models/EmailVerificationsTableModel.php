<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EmailVerificationsTableModel extends Model
{
    use Notifiable;
    protected $table = "email_verifications";
    protected $primaryKey = "id";
    protected $guarded = [];
}
