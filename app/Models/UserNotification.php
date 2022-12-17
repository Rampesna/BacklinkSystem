<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    public function notification()
    {
        return $this->belongsTo(Notification::class, 'notification_id', 'id');
    }
}
